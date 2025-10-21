@extends('master')
@section('title', 'Daftar Pegawai')
@section('content')

    <div class="d-flex">
        <h1 class="mb-4">Daftar Pegawai</h1>
        <div class="ms-auto my-auto">
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Pegawai</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jabatan</th>
                <th>Departemen</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->nama_lengkap }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->nomor_telepon }}</td>
                    <td>{{ $employee->tanggal_lahir }}</td>
                    <td>{{ $employee->alamat }}</td>
                    <td>{{ $employee->jabatan->nama_jabatan }}</td>
                    <td>{{ $employee->departemen->nama_departemen }}</td>
                    <td>{{ $employee->tanggal_masuk }}</td>
                    <td>{{ $employee->status }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}">Detail</a> |
                        <a href="{{ route('employees.edit', $employee->id) }}">Edit</a> |
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
