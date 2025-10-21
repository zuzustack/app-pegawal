@extends('master')
@section('title', 'Daftar Pegawai')
@section('content')

    <div class="d-flex">
        <h1 class="mb-4">Daftar Position</h1>
        <div class="ms-auto my-auto">
            <a href="{{ route('positions.create') }}" class="btn btn-primary">Tambah Position</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $position)
                <tr>
                    <td>{{ $position->nama_jabatan }}</td>
                    <td>{{ $position->gaji_pokok }}</td>
                    <td>
                        <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('positions.destroy', $position->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus posisi ini?')">Hapus</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
