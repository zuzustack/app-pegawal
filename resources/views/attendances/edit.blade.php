@extends('master')
@section('title', 'Daftar Attendance')
@section('content')
    <h1 class="mb-4">Edit Data Attendance</h1>
    <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="karyawan_id">Nama Karyawan:</label></td>
                <td>
                    <select class="form-control" id="karyawan_id" name="karyawan_id">
                        @foreach ($karyawans as $karyawan)
                            <option value="{{ $karyawan->id }}" {{ $karyawan->id == $attendance->karyawan_id ? 'selected' : '' }}>{{ $karyawan->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal:</label></td>
                <td><input class="form-control" type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $attendance->tanggal) }}"></td>
            </tr>
            <tr>
                <td><label for="waktu_masuk">Waktu Masuk:</label></td>
                <td><input class="form-control" type="time" id="waktu_masuk" name="waktu_masuk" value="{{ old('waktu_masuk', $attendance->waktu_masuk) }}"></td>
            </tr>
            <tr>
                <td><label for="waktu_keluar">Waktu Keluar:</label></td>
                <td><input class="form-control" type="time" id="waktu_keluar" name="waktu_keluar" value="{{ old('waktu_keluar', $attendance->waktu_keluar) }}"></td>
            </tr>
            <tr>
                <td><label for="status_absensi">Status Absensi:</label></td>
                <td>
                    <select class="form-control" id="status_absensi" name="status_absensi">
                        <option value="hadir" {{ $attendance->status_absensi == 'hadir' ? 'selected' : '' }}>Hadir</option>
                        <option value="izin" {{ $attendance->status_absensi == 'izin' ? 'selected' : '' }}>Izin</option>
                        <option value="sakit" {{ $attendance->status_absensi == 'sakit' ? 'selected' : '' }}>Sakit</option>
                        <option value="alpha" {{ $attendance->status_absensi == 'alpha' ? 'selected' : '' }}>Alpha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button class="btn btn-secondary" type="button" onclick="window.history.back();">Batal</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
