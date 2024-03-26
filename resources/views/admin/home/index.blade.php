@extends('layouts.app')

@section('style')
    <style>
        .card:hover {
            transform:translateY(-5px);
            box-shadow: 0px 7px 3px rgba(0, 0, 255, 0.2) !important;

        }
        /* .card-custom:hover {
            text-decoration: none;
        } */
    </style>
@endsection

@section('content')

    <div class="row d-flex justify-content-center align-items-center flex-column mt-5 bg-white">
        <img src="{{ asset('/assets/auth/images/bg-01.png') }}" class="img-fluid rounded" width="350px" alt="image-profile">
        <h5 class="font-weight-bold text-gray-900 mt-3">Selamat datang, {{ Auth::user()->name }}</h5>
        <p>Manage your info, privacy, and security to make Banking work better for you.</p>
    </div>
    <!-- Page Heading -->
    <h4 class="mb-4 mt-3 text-gray-900">
        <i class="fas fa-fw fa-desktop"></i>
        Daftar Aplikasi Tersedia
    </h4>

    <div class="row">

        @foreach ($apps as $app)
        @can($app->permission)
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ $app->link }}" class="text-decoration-none">
                <div class="card border-left-primary shadow-sm h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    {{ $app->name }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ strtoupper($app->alias) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="{{ $app->icon }} fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endcan
        @endforeach

        @can('manage-difisy')
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="https://difisy.feb-unsiq.ac.id/dashboard" class="nav-link card-custom" target="_blank">
                <div class="card border-left-primary shadow h-100 py-2" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/img/logo-difisy.jpg') }}" class="card-img-top py-2" alt="logo-difisy">
                    </div>
                </div>
            </a>
        </div>
        @endcan

        @can('manage-digilib')
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="https://digilib.feb-unsiq.ac.id/admin/dashboard" class="nav-link card-custom" target="_blank">
                <div class="card border-left-primary shadow h-100 py-2" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/img/logo-digilib.jpg') }}" class="card-img-top py-2" alt="logo-digilib">
                    </div>
                </div>
            </a>
        </div>
        @endcan

        @can('manage-diaregsy')
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="https://diaregsy.feb-unsiq.ac.id/admin/dashboard" class="nav-link card-custom" target="_blank">
                <div class="card border-left-primary shadow h-100 py-2" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/img/logo-diaregsi.jpg') }}"class="card-img-top py-2" alt="logo-diaregsi">
                    </div>
                </div>
            </a>
        </div>
        @endcan

        @can('manage-pedoma')
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="https://pedoma.feb-unsiq.ac.id/admin/auth" class="nav-link card-custom" target="_blank">
                <div class="card border-left-primary shadow h-100 py-2" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/img/logo-pedoma.jpg') }}" class="card-img-top py-2" alt="logo-pedoma">
                    </div>
                </div>
            </a>
        </div>
        @endcan

        @can('manage-spmi')
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="https://espmi.feb-unsiq.ac.id/home" class="nav-link card-custom" target="_blank">
                <div class="card border-left-primary shadow h-100 py-2" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/img/logo-spmi.jpg') }}" class="card-img-top py-2" alt="logo-spmi">
                    </div>
                </div>
            </a>
        </div>
        @endcan

        @can('manage-repository')
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="https://repository.feb-unsiq.ac.id" class="nav-link card-custom" target="_blank">
                <div class="card border-left-primary shadow h-100 py-2" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/img/logo-repository.png') }}" class="card-img-top py-2" alt="logo-spmi">
                    </div>
                </div>
            </a>
        </div>
        @endcan
    </div>

@endsection
