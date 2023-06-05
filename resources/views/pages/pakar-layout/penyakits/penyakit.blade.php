@extends('layout.layout')
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
        <h1 class="mt-4">Penyakit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.pakar') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Penyakit</li>
        </ol>
        <div class="card mb-4">
            {{-- @if($condition)
            <div class="alert alert-success" role="alert">
                A simple success alert—check it out!
            </div>
            @endif --}}
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0"><i class="fas fa-table me-1"></i>Data Table Penyakit</h5>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end w-25 p-3" aria-labelledby="dropdownMenuButton">
                        <li><a href="{{ route('penyakit.create') }}"><button class="btn btn-success">Create</button></a></li>
                        <hr>
                        <li><a class="btn btn-danger" href="{{ route('penyakit.cetak') }}">Cetak PDF</a></li>
                    </ul>
                </div>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penyakits as $p)
                        <tr>
                            <td>{{ $p->nama_penyakit }}</td>
                            <td>{{ $p->deskripsi_penyakit}}</td>
                            <td>{{ $p->solusi_penyakit}}</td>
                            <td>{{ $p->obat->nama_obat}}</td>
                            <td><img  src='/img/{{ $p->foto_penyakit}}' width="200px"></td>
                            <td>
                                <a href="{{ route('penyakit.edit', ['id' => $p->id]) }}" class="btn btn-primary">Edit</a>
                                |
                                <a href="{{ route('penyakit.delete', ['id' => $p->id]) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
