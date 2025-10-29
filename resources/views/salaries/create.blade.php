@extends('master')
@section('title', 'Form Salaries')
@section('content')
    <h1 class="mb-4">Form Salaries</h1>
    <form action="{{ route('salaries.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="karyawan_id">Karyawan:</label></td>
                <td>
                    <select class="form-control" id="karyawan_id" name="karyawan_id">
                        <option value="">Pilih Karyawan</option>
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="bulan">Bulan:</label></td>
                <td><input class="form-control" type="text" id="bulan" name="bulan" required></td>
            </tr>
            <tr>
                <td><label for="tunjangan">Tunjangan:</label></td>
                <td><input class="form-control" type="number" id="tunjangan" name="tunjangan"></td>
            </tr>
            <tr>
                <td><label for="potongan">Potongan:</label></td>
                <td><input class="form-control" type="number" id="potongan" name="potongan"></td>
            </tr
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#bulan').datepicker({
                format: "yyyy-mm",
                startView: "months",
                minViewMode: "months",
                autoclose: true
            });
        });
    </script>
@endsection
