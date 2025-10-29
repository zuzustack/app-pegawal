@extends('master')
@section('title', 'Update Salaries')
@section('content')
    <h1 class="mb-4">Edit Data Salaries</h1>
    <form action="{{ route('salaries.update', $salary->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="karyawan_id">Karyawan:</label></td>
                <td>
                    <select class="form-control" id="karyawan_id" name="karyawan_id">
                        <option value="">Pilih Karyawan</option>
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}" {{ $employee->id == $salary->karyawan_id ? 'selected' : '' }}>
                                {{ $employee->nama_lengkap }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="bulan">Bulan:</label></td>
                <td><input class="form-control" type="text" id="bulan" name="bulan" value="{{ $salary->bulan }}" required></td>
            </tr>
            <tr>
                <td><label for="tunjangan">Tunjangan:</label></td>
                <td><input class="form-control" type="number" id="tunjangan" name="tunjangan" value="{{ $salary->tunjangan }}"></td>
            </tr>
            <tr>
                <td><label for="potongan">Potongan:</label></td>
                <td><input class="form-control" type="number" id="potongan" name="potongan" value="{{ $salary->potongan }}"></td>
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
