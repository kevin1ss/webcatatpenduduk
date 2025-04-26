@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="float-right">
      <a href="" class="btn btn-success">Tambah Data</a>
    
      <div class="clearfix"></div>
      <br>

    </div>
    <div class="clearfix"></div>
    <br>
  <table class="table table-bordered table-primary text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Penduduk</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($penduduk as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{$item->namapenduduk}}</td>
      <td>{{ \Carbon\Carbon::parse($item->tanggallahir)->translatedFormat('d F Y') }}</td>
       <td>{{$item->jeniskelamin}}</td>
      <td>{{$item->alamat}}</td>
      <div class="justify-content-center">
        <td><a href="" class="btn btn-warning btn-sm btn-block">HAPUS</a>
          <a href="" class="btn btn-primary btn-sm btn-block">EDIT</a>
        </td>
      </div>
    </tr>
    @endforeach
  </tbody>

</table>
  </div>
@endsection