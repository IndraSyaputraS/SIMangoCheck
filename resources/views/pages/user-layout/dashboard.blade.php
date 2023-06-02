@extends('layout.layout')
@section('title')
<title>Dashboard - User</title>
@endsection
@section('dashboard')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-2 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Konsultasi<i class="fas fa-chalkboard-user ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">2</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Hasil<i class="fas fa-square-poll-vertical ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">1</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
            <div class="profile-box">
                <h3>User Profile</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Name:</strong>
                        <p>Indra Syaputra Stiansyah</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Email:</strong>
                        <p>indra@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Age:</strong>
                        <p>21</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Location:</strong>
                        <p>Tulungagung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .profile-box {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .profile-box h3 {
        margin-top: 0;
    }

</style>
@endsection
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
                    <a class="nav-link px-2 mx-1" style="color : #F5FEFD;" href="{{ route('konsultasi') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-chalkboard-user"></i></div>
                        Konsultasi
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('hasil.user') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-square-poll-vertical"></i></div>
                        Hasil
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
