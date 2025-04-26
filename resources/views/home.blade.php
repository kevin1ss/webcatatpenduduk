@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="clearfix"></div>
            <div class="card-group">
                <div class="card text-white bg-danger mt-2 mr-3">
                    <div class="card-header">PENDUDUK</div>
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Penduduk</h5>
                            <div class="clearfix"></div>
                       
                            <center><h3>{{$penduduk}}&nbsp;Orang</h3></center>
                            <p class="card-text"><a href="{{route ('processed.dapun')}}" class="btn btn-sm btn-block btn-success">Daftar Penduduk</a></p>
                 

                         </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="card text-white bg-primary mt-2 mr-3">
                    <div class="card-header">KELURAHAN</div>
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Kelurahan</h5>
                            <div class="clearfix"></div>
                            <center><h3>50&nbsp;Lurah</h3></center>
                            <p class="card-text"><a href="" class="btn btn-sm btn-block btn-success">Daftar Penduduk</a></p>
                         </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card text-center text-white bg-primary mt-2 mr-3">
                        <div class="card-header">RT/RW</div>
                            <div class="card-body">
                                <h5 class="card-title">Jumlah RT/RW</h5>
                                <div class="clearfix"></div>
                                <center><h3>50&nbsp;Rt</h3>|<h3>50&nbsp;RW</h3></center>
                                <p class="card-text"><a href="" class="btn btn-sm btn-block btn-success">Lihat Data</a></p>
                             </div>
                        </div>
                    </div>
                </div>

            </div>
</div>
@endsection
