@extends('layouts.app')
@section('content')
    <div class="container">
        @if(auth()->check() && auth()->user()->role == 'admin')
            <div class="card">
                <div class="card-header">
                    Tambah Data Penduduk
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="namakelurahan">Nama Keluarhan</label>
                            <input type="text" name="namakelurahan" id="" class="form-control  @error('namakelurahan')
                    is-invalid  @enderror " value="{{ old("namakelurahan") }}">
                    @error('namakelurahan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-success">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
        @endif
    </div>
@endsection