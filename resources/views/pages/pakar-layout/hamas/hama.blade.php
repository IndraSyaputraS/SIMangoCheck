@extends('layout.layout')
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
    @section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Hama</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-pakar') }}">Dashboard Pakar</a></li>
            <li class="breadcrumb-item active">Hama</li>
        </ol>
        <div class="card mb-4">
           <div class="card-header d-flex justify-content-between">
                <h5 class="my-0"><i class="fas fa-table me-1"></i>DataTable</h5>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end w-25 p-3" aria-labelledby="dropdownMenuButton">
                        <li><button class="btn btn-success" href="#">Create</button></li>
                        <hr>
                        <li><button class="btn btn-danger" href="#">Cetak PDF</button></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Hama</th>
                            <th>Deskripsi</th>
                            <th>Solusi</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nama Hama</th>
                        <th>Deskripsi</th>
                        <th>Solusi</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                    <tbody>
                        <tr>
                            <td>Lalat Buah</td>
                            <td>Lalat buah (fruitfly) merupakan hama yang paling merugikan dalam budidaya tanaman di Indonesia dan di dunia sehingga lalat buah merupakan hama utama pada tanaman hortikultura. Lalat buah sangat merugikan karena menyerang buah yang dikonsumsi oleh manusia. Oleh sebab itu, lalat buah dikenal sebagai hama langsung (direct pest) karena bagian tanaman yang diserang adalah buah yang siap dipasarkan atau siap dikonsumsi.</td>
                            <td>Pengendalian hama lalat buah yang paling aman tanpa residu pestisida adalah dengan menggunakan perangkap yaitu dengan zat penarik (attractant) metil eugenol.</td>
                            <td><img src="/assets/assets/img/Lalatbuah.jpg"></td>
                            <td>
                                <button class="btn btn-primary">Edit</button><hr>
                                <button class="btn btn-warning">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
