@extends('master')
@section('title', 'Daftar Pegawai')
@section('content')

    <div class="d-flex">
        <h1 class="mb-4">Daftar Department</h1>
        <div class="ms-auto my-auto">
            <a href="{{ route('departments.create') }}" class="btn btn-primary">Tambah Department</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Department</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->nama_departemen }}</td>
                    <td>
                        <a href="{{ route('departments.show', $department->id) }}">Detail</a> |
                        <a href="{{ route('departments.edit', $department->id) }}">Edit</a> |
                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
