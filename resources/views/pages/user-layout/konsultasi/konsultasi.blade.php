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
    @section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Konsultasi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-user') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Konsultasi</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0"><i class="fas fa-table me-1"></i>Data Table Konsultasi</h5>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end w-25 p-3" aria-labelledby="dropdownMenuButton">
                        <li><a href="{{ route('konsultasi.create') }}"><button class="btn btn-success">Create</button></a></li>
                        <hr>
                        <li><button class="btn btn-danger" href="#">Cetak PDF</button></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Gejala</th>
                            <th>Penyakit</th>
                            <th>Hama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gejala</th>
                            <th>Penyakit</th>
                            <th>Hama</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                <p>daun melengkung ke atas, keriting, dan belang-belang?</p>
                                <p>daun melengkung ke atas, keriting, dan belang-belang?</p>
                                <p>daun melengkung ke atas, keriting, dan belang-belang?</p>
                            </td>
                            <td>Gleosporium</td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-warning">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>daun melengkung ke atas, keriting, dan belang-belang?</p>
                                <p>daun melengkung ke atas, keriting, dan belang-belang?</p>
                                <p>daun melengkung ke atas, keriting, dan belang-belang?</p>
                            </td>
                            <td>-</td>
                            <td>Lalat Buah</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-warning">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
