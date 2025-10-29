@extends('master')
@section('title', 'Detail Attendance')
@section('content')
    <h1>Detail Attendance</h1>
    <button class="btn btn-secondary mb-3" onclick="window.history.back();">Kembali</button>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama Karyawan</th>
            <td>{{ $attendance->employee->nama_lengkap }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ $attendance->tanggal }}</td>
        </tr>
        <tr>
            <th>Waktu Masuk</th>
            <td>{{ $attendance->waktu_masuk }}</td>
        </tr>
        <tr>
            <th>Waktu Keluar</th>
            <td>{{ $attendance->waktu_keluar }}</td>
        </tr>
        <tr>
            <th>Status Absensi</th>
            <td>{{ $attendance->status_absensi }}</td>
        </tr>
    </table>
@endsection
