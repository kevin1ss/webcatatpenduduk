@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="clearfix"></div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 h-1" src="{{ asset('img/1.png') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 h-1" src="{{ asset('img/2.png') }}" alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
@endsection
