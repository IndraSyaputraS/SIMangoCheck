@extends('layout.layout')
@section('title')
<title>Dashboard - Pakar</title>
@endsection
@section('dashboard')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-2 col-md-6 mx-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Penyakit <i class="fas fa-disease ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a name="penyakit" class="small text-white">{{ $penyakit }}</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6 mx-4">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Hama<i class="fas fa-spaghetti-monster-flying ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a name="hama" class="small text-white">{{ $hama }}</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6 mx-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Obat<i class="fas fa-pills ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a name="obat" class="small text-white">{{ $obat }}</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6 mx-4">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Gejala<i class="fas fa-newspaper ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a name="gejala" class="small text-white">{{ $gejala }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-2 col-md-6 mx-4">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Aturan Penyakit<i class="fas fa-book-open ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a name="aturan_penyakit" class="small text-white">{{ $aturan_penyakit }}</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6 mx-4">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Aturan Hama<i class="fas fa-book-open ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a name="aturan_hama" class="small text-white">{{ $aturan_hama }}</a>
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
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('dashboard.pakar') }}">
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
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('aturan.penyakit') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-book-open"></i></div>
                        Aturan Penyakit
                    </a>
                    <a class="nav-link" style="color : #F5FEFD;" href="{{ route('aturan.hama') }}">
                        <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-book-open"></i></div>
                        Aturan Hama
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
    @section('content')
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0"><i class="fas fa-table me-1"></i>Data Table Penyakit</h5>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Penyakit</th>
                            <th>Deskripsi</th>
                            <th>Solusi</th>
                            <th>Obat</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tampil as $p)
                        <tr>
                            <td>{{ $p->nama_penyakit }}</td>
                            <td>{{ $p->deskripsi_penyakit}}</td>
                            <td>{{ $p->solusi_penyakit}}</td>
                            <td>{{ $p->obat->nama_obat}}</td>
                            <td><img src='/img/{{ $p->foto_penyakit}}' width="200px"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
