@extends('layout.layout')
@section('sidebar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('dashboard-user') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link px-2 mx-1" style="color : #F5FEFD;" href="{{ route('konsultasi.penyakit') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-chalkboard-user"></i></div>
                        Konsultasi Penyakit
                    </a>
                    <a class="nav-link px-2 mx-1" style="color : #F5FEFD;" href="{{ route('konsultasi.hama') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-chalkboard-user"></i></div>
                        Konsultasi Hama
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('hasil.penyakit.user') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-square-poll-vertical"></i></div>
                        Hasil Konsul Penyakit
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('hasil.hama.user') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-square-poll-vertical"></i></div>
                        Hasil Konsul Hama
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                User
            </div>
        </nav>
    </div>
    @endsection
    @section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Konsultasi Hama</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-user') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Konsultasi Hama</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0"><i class="fas fa-table me-1"></i>Konsultasi Hama</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('konsultasi.hama.check') }}" method="POST">
                @csrf
                    <div class="form-check">
                        @foreach ($gejala as $g)
                        <input name="gejala[]" value="{{ $g->id }}" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <p class="form-check-label" for="flexCheckDefault">
                            {{ $g->nama_gejala }}
                        </p>
                        @endforeach
                        <div class="form-group d-flex justify-content-start">
                            <button type="submit" class="btn btn-primary">Check Penyakit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @endsection
