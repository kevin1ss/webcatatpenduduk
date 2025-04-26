@extends('layouts.app')
@section('content')
    <div class="container">
        @if(auth()->check() && auth()->user()->role == 'admin')
            <div class="card">
                <div class="card-header">
                    Tambah Data Penduduk
                </div>
                <div class="card-body">
                    <form action="{{route('processed.dapuni')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="namapenduduk">Nama Penduduk</label>
                            <input type="text" name="namapenduduk" id="" class="form-control  @error('namapenduduk')
                    is-invalid  @enderror " value="{{ old("namapenduduk") }}">
                    @error('namapenduduk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggallahir">Tanggal&nbsp;Lahir</label>
                            <input type="date" name="tanggallahir" id="" class="form-control @error('tanggallahir')
                    is-invalid  @enderror "  value="{{ old("tanggallahir") }}">
                    @error('tanggallahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis&nbsp;Kelamin</label>
                            <select class="form-control @error('jeniskelamin')
                    is-invalid  @enderror " name="jeniskelamin" id="exampleFormControlSelect1" value="{{ old("jeniskelamin") }}">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                              @error('jeniskelamin')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="" class="form-control @error('alamat')
                    is-invalid  @enderror " value="{{ old("alamat") }}">
                    @error('alamat')
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