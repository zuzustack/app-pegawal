@extends('master')
@section('title', 'Daftar Department')
@section('content')
    <h1 class="mb-4">Form Department</h1>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_departemen">Nama Departemen:</label></td>
                <td><input class="form-control" type="text" id="nama_departemen" name="nama_departemen"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
