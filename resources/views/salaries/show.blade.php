@extends('master')
@section('title', 'Detail Salaries')
@section('content')
    <h1>Detail Salaries</h1>
    <button class="btn btn-secondary mb-3" onclick="window.history.back();">Kembali</button>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama Karyawan</th>
            <td>{{ $salary->employee->nama_lengkap }}</td>
        </tr>
        <tr>
            <th>Bulan</th>
            <td>{{ \Carbon\Carbon::parse($salary->bulan)->format('F Y') }}</td>
        </tr>
        <tr>
            <th>Gaji Pokok</th>
            <td>{{ number_format($salary->gaji_pokok, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Tunjangan</th>
            <td>{{ number_format($salary->tunjangan, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Potongan</th>
            <td>{{ number_format($salary->potongan, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Total Gaji</th>
            <td>{{ number_format($salary->total_gaji, 0, ',', '.') }}</td>
        </tr>
    </table>
@endsection
