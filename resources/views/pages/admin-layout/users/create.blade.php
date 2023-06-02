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
    @section('content')
    <div class="container-fluid px-4 mt-5">
        <h1 class="mt-4">Create User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-user') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user') }}">User</a></li>
            <li class="breadcrumb-item active">Create User</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0">Create</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID USer</label>
                        <input type="text" class="form-control w-25" id="exampleFormControlInput1" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control w-50" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control w-50" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control w-75" id="exampleFormControlInput1" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No.Telephone</label>
                        <input type="text" class="form-control w-25" id="exampleFormControlInput1" placeholder="No.Telephone">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Role</label>
                        <input type="text" class="form-control w-25" id="exampleFormControlInput1" placeholder="Role">
                    </div>
                </form>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('user') }}" class="btn btn-success">Create</a>
                </div>
                <div id="selectedOptions"></div>
            </div>
        </div>
    </div>
    @endsection
