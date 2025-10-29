@extends('master')
@section('title', 'Daftar Attendance')
@section('content')

    <div class="d-flex">
        <h1 class="mb-4">Daftar Attendance</h1>
        <div class="ms-auto my-auto">
            <a href="{{ route('attendances.create') }}" class="btn btn-primary">Tambah Attendance</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Status Absensi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->employee->nama_lengkap }}</td>
                    <td>{{ $attendance->tanggal }}</td>
                    <td>{{ $attendance->waktu_masuk }}</td>
                    <td>{{ $attendance->waktu_keluar }}</td>
                    <td>{{ $attendance->status_absensi }}</td>
                    <td>
                        <a href="{{ route('attendances.show', $attendance->id) }}">Detail</a> |
                        <a href="{{ route('attendances.edit', $attendance->id) }}">Edit</a> |
                        <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST" style="display:inline;">
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
