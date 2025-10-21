@extends('master')
@section('title', 'Daftar Department')
@section('content')
    <h1 class="mb-4">Edit Data Department</h1>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="nama_departemen">Nama Departemen:</label></td>
                <td><input class="form-control" type="text" id="nama_departemen" name="nama_departemen" value="{{ old('nama_departemen', $department->nama_departemen) }}"></td>
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
