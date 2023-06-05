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
        <h1 class="mt-4">Hasil Konsultasi Penyakit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-user') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Hasil Konsultasi Penyakit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0"><i class="fas fa-table me-1"></i>Data Table Hasil Konsultasi Penyakit</h5>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end w-25 p-3" aria-labelledby="dropdownMenuButton">
                        <li><a class="btn btn-danger" href="{{ route('hasil.penyakit.user.cetak') }}">Cetak PDF</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>DateTime</th>
                            <th>Penyakit</th>
                            <th>gejala</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($hasil as $h)
                        <tr>
                            <td>{{ $h->user_id }}</td>
                            <td>{{ $h->datetime }}</td>
                            <td>{{ $h->penyakit->nama_penyakit }}</td>
                            <td>
                                @foreach ($h->gejala as $g )
                                <p>{{ $no++ }}. {{ $g->nama_gejala }}</p>
                                @endforeach
                            </td>
                        </tr>
                        @php
                        $no=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
