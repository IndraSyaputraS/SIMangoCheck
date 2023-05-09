@extends('layout.layout')
@section('sidebar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('admin') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('user') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-user"></i></div>
                        User
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('role') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-people-group"></i></div>
                        Role
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="#">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-square-poll-vertical"></i></div>
                        Hasil
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>
    @endsection
    @section('dashboard')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard Pakar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard Admin</li>
        </ol>
        <div class="row">
            <div class="col-xl-2 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">User</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white">2</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Roles</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white">1</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Hasil</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white">1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
