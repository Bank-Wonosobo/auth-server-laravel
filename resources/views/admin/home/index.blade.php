@extends('layouts.app')
@section('title', 'Dashboard')

@section('style')
    <style>
        .card-custom:hover {
            transform:translateY(-5px);
            box-shadow: 0px 7px 3px rgba(0, 0, 255, 0.2) !important;

        }
        /* .card-custom:hover {
            text-decoration: none;
        } */
    </style>
@endsection

@section('content')
<section class="section dashboard">

<div class="row mb-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row d-flex justify-content-center align-items-center flex-column bg-white">
                            <img src="{{ asset('/assets/admin/img/bg-01.png') }}" class="img-fluid rounded"  alt="image-profile">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="mt-3 card-title">Selamat datang, {{ Auth::user()->name }}</h5>
                        <p>Manage your archive to make Banking work better for you,  and happy working :)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<!-- Right side columns -->
<div class="col-lg-12">
      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          @foreach ($apps as $app)
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <a href="{{ $app->link }}" class="text-decoration-none" target="_blank">
                <div class="card card-custom info-card sales-card">
                  <div class="card-body mt-4">
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-archive"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $app->alias}}</h6>
                        <span class="text-success small pt-1 fw-bold">{{ $app->name }}</span>

                      </div>
                    </div>
                  </div>
                </div>
            </a>
          </div>
          @endforeach

        </div>
      </div><!-- End Left side columns -->
    </div>
</section>
@endsection
