@extends('layout.layout')
@section('title')
<title>Dashboard - Admin</title>
@endsection
@section('sidebar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('admin') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('user') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-user"></i></div>
                        User
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('admin.hasil') }}">
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
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-2 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">User<i class="fas fa-user ml-auto fa-lg px-2"></i></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white">{{ $user }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Roles<i class="fas fa-people-group ml-auto fa-lg px-2"></i></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white">1</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Hasil<i class="fas fa-square-poll-vertical ml-auto fa-lg px-2"></i></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white">1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('content')
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0"><i class="fas fa-table me-1"></i>Data Table User</h5>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pekerjaan</th>
                            <th>Telepon</th>
                            <th>Role ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $u)
                        <tr>
                            <td>{{ $u->nama }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->pekerjaan }}</td>
                            <td>{{ $u->telp }}</td>
                            <td>{{ $u->role_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
