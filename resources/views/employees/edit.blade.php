@extends('master')
@section('title', 'Daftar Pegawai')
@section('content')
<h2>Edit Data Pegawai</h2>
<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><input class="form-control" type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email" value="{{ old('email', $employee->email) }}"></td>
        </tr>
        <tr>    
            <td>Nomor Telepon</td>
            <td><input class="form-control" type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}">
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input class="form-control" type="text" name="alamat" value="{{ old('alamat', $employee->alamat) }}"></td>
        </tr>
        <tr>
            <td>Tanggal Masuk</td>
            <td><input class="form-control" type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}">
            </td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>
                <select class="form-control" name="jabatan_id">
                    @foreach($positions as $position)
                        <option value="{{ $position->id }}" {{ old('jabatan_id', $employee->jabatan_id) == $position->id ? 'selected' : '' }}>
                            {{ $position->nama_jabatan }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Departemen</td>
            <td>
                <select class="form-control" name="departemen_id">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ old('departemen_id', $employee->departemen_id) == $department->id ? 'selected' : '' }}>
                            {{ $department->nama_departemen }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select class="form-control" name="status">
                    <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif
                    </option>
                    <option value="tidak aktif"
                        {{ old('status', $employee->status) == 'tidak aktif' ? 'selected' : '' }}>Tidak
                        Aktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button class="btn btn-primary" type="submit">Update</button>
            </td>
        </tr>
    </table>
</form>
@endsection