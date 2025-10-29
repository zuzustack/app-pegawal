<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salary::with('employee')->get();
        return view('salaries.index', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('salaries.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:10',
            'tunjangan' => 'nullable|numeric',
            'potongan' => 'nullable|numeric',
        ]);

        $gajipokok = Employee::find($validatedData['karyawan_id'])->jabatan->gaji_pokok;
        $tunjangan = $validatedData['tunjangan'] ?? 0;
        $potongan = $validatedData['potongan'] ?? 0;
        $totalGaji = $gajipokok + $tunjangan - $potongan;

        Salary::create([
            'karyawan_id' => $validatedData['karyawan_id'],
            'bulan' => $validatedData['bulan'],
            'gaji_pokok' => $gajipokok,
            'tunjangan' => $tunjangan,
            'potongan' => $potongan,
            'total_gaji' => $totalGaji,
        ]);

        return redirect()->route('salaries.index')->with('success', 'Salary record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salary = Salary::with('employee')->findOrFail($id);
        return view('salaries.show', compact('salary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salary = Salary::findOrFail($id);
        $employees = Employee::all();
        return view('salaries.edit', compact('salary', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:10',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'nullable|numeric',
            'potongan' => 'nullable|numeric',
        ]);

        $tunjangan = $validatedData['tunjangan'] ?? 0;
        $potongan = $validatedData['potongan'] ?? 0;
        $totalGaji = $validatedData['gaji_pokok'] + $tunjangan - $potongan;

        $salary = Salary::findOrFail($id);
        $salary->update([
            'karyawan_id' => $validatedData['karyawan_id'],
            'bulan' => $validatedData['bulan'],
            'gaji_pokok' => $validatedData['gaji_pokok'],
            'tunjangan' => $tunjangan,
            'potongan' => $potongan,
            'total_gaji' => $totalGaji,
        ]);

        return redirect()->route('salaries.index')->with('success', 'Salary record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary = Salary::findOrFail($id);
        $salary->delete();

        return redirect()->route('salaries.index')->with('success', 'Salary record deleted successfully.');
    }
}
