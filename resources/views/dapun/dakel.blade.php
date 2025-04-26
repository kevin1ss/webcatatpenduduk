@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="float-right">
      <a href="" class="btn btn-success">Tambah Data</a>
    
      <div class="clearfix"></div>
      <br>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari Anggota Keluarga</button>
      </form>
    </div>
    <div class="clearfix"></div>
    <br>
  <table class="table table-bordered table-primary text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kepala Keluarga</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jumlah Anggota Keluarga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
       <td>Mark</td>
      <div class="justify-content-center">
        <td><a href="" class="btn btn-warning btn-sm btn-block">HAPUS</a>
          <a href="" class="btn btn-primary btn-sm btn-block">EDIT</a>
        </td>
      </div>
    </tr>
  </tbody>

</table>
  </div>
@endsection