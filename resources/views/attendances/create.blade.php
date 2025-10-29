@extends('master')
@section('title', 'Daftar Attendance')
@section('content')
    <h1 class="mb-4">Form Attendance</h1>
    <form action="{{ route('attendances.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="karyawan_id">Nama Karyawan:</label></td>
                <td>
                    <select class="form-control" id="karyawan_id" name="karyawan_id">
                        @foreach ($karyawans as $karyawan)
                            <option value="{{ $karyawan->id }}">{{ $karyawan->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal:</label></td>
                <td><input class="form-control" type="date" id="tanggal" name="tanggal"></td>
            </tr>
            <tr>
                <td><label for="waktu_masuk">Waktu Masuk:</label></td>
                <td><input class="form-control" type="time" id="waktu_masuk" name="waktu_masuk"></td>
            </tr>
            <tr>
                <td><label for="waktu_keluar">Waktu Keluar:</label></td>
                <td><input class="form-control" type="time" id="waktu_keluar" name="waktu_keluar"></td>
            </tr>
            <tr>
                <td><label for="status_absensi">Status Absensi:</label></td>
                <td>
                    <select class="form-control" id="status_absensi" name="status_absensi">
                        <option value="hadir">Hadir</option>
                        <option value="izin">Izin</option>
                        <option value="sakit">Sakit</option>
                        <option value="alpha">Alpha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
