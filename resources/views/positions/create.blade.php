@extends('master')
@section('title', 'Daftar Position')
@section('content')
    <h1 class="mb-4">Form Position</h1>
    <form action="{{ route('positions.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_jabatan">Nama Jabatan:</label></td>
                <td><input class="form-control" type="text" id="nama_jabatan" name="nama_jabatan"></td>
            </tr>
            <tr>
                <td><label for="gaji_pokok">Gaji Pokok:</label></td>
                <td><input class="form-control" type="number" id="gaji_pokok" name="gaji_pokok"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
