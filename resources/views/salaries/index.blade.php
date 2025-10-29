@extends('master')
@section('title', 'Daftar Salaries')
@section('content')

    <div class="d-flex">
        <h1 class="mb-4">Daftar Salaries</h1>
        <div class="ms-auto my-auto">
            <a href="{{ route('salaries.create') }}" class="btn btn-primary">Tambah Salary</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Bulan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Potongan</th>
                <th>Total Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salaries as $salary)
                <tr>
                    <td>{{ $salary->employee->nama_lengkap }}</td>
                    <td>{{ $salary->bulan }}</td>
                    <td>{{ number_format($salary->gaji_pokok, 0, ',', '.') }}</td>
                    <td>{{ number_format($salary->tunjangan, 0, ',', '.') }}</td>
                    <td>{{ number_format($salary->potongan, 0, ',', '.') }}</td>
                    <td>{{ number_format($salary->total_gaji, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('salaries.show', $salary->id) }}">Detail</a> |
                        <a href="{{ route('salaries.edit', $salary->id) }}">Edit</a> |
                        <form action="{{ route('salaries.destroy', $salary->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
