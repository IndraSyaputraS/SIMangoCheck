@extends('layout.layout')
@section('dashboard')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard Pakar</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard Pakar</li>
    </ol>
    <div class="row">
        <div class="col-xl-2 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Penyakit</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">2</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Hama</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">1</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Obat</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">1</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Gejala</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">2</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Aturan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">2</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('sidebar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('dashboard-pakar') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('penyakit') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-disease"></i></div>
                        Penyakit
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('hama') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-spaghetti-monster-flying"></i></div>
                        Hama
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('obat') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-pills"></i></div>
                        Obat
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('gejala') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-newspaper"></i></div>
                        Gejala
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('aturan') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-book-open"></i></div>
                        Aturan
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Pakar
            </div>
        </nav>
    </div>
    @endsection
