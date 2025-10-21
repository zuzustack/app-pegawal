@extends('master')
@section('title', 'Daftar Position')
@section('content')
    <h1>Detail Position</h1>
    <button class="btn btn-secondary mb-3" onclick="window.history.back();">Kembali</button>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama Jabatan</th>
            <td>{{ $position->nama_jabatan }}</td>
        </tr>
        <tr>
            <th>Gaji Pokok</th>
            <td>{{ $position->gaji_pokok }}</td>
        </tr>
    </table>
@endsection
