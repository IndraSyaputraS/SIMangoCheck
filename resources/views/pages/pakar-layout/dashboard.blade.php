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
        <div class="col-xl-2 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Penyakit <i class="fas fa-disease ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">2</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Hama<i class="fas fa-spaghetti-monster-flying ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">1</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Obat<i class="fas fa-pills ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">1</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Gejala<i class="fas fa-newspaper ml-auto fa-lg px-2"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white">2</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Aturan<i class="fas fa-book-open ml-auto fa-lg px-2"></i></div>
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
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Penyakit</th>
                            <th>Deskripsi</th>
                            <th>Solusi</th>
                            <th>Foto</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Gleosporium</td>
                            <td>Gleosporium adalah genus dari jamur yang terdiri dari spesies-spesies yang dapat menyebabkan berbagai macam penyakit pada tanaman.</td>
                            <td>Pengendalian penyakit Gleosporium dapat dilakukan dengan menghindari kondisi yang memungkinkan infeksi, seperti menjaga kebersihan lingkungan dan memotong bagian tanaman yang terinfeksi. Penggunaan fungisida juga dapat membantu mengendalikan infeksi pada tanaman. Namun, sebaiknya konsultasikan dengan ahli pertanian atau petani lokal untuk mengetahui cara terbaik untuk mengendalikan penyakit Gleosporium pada tanaman yang terdapat di wilayah Anda.</td>
                            <td><img src="/assets/assets/img/Penyakit_Gleosporium.jpg"></td>
                        </tr>
                        <tr>
                            <td>Diplodia</td>
                            <td>Diplodia pada pohon mangga adalah suatu jenis penyakit yang disebabkan oleh jamur Diplodia sp. Penyakit ini dapat menyerang buah, daun, ranting, dan cabang dari pohon mangga, dan menyebabkan kerusakan pada tanaman serta mengurangi kualitas dan hasil panen buah mangga.</td>
                            <td>Membersihkan daun dan ranting yang terinfeksi dan membuangnya dari kebun. Mencegah luka pada pohon mangga saat melakukan pemangkasan atau pembersihan di sekitar pohon. Menghindari penyiraman berlebihan dan menjaga kelembaban yang sesuai di sekitar pohon mangga. Menggunakan fungisida yang sesuai dan disarankan oleh petani lokal atau ahli pertanian. Menjaga kebersihan lingkungan sekitar pohon mangga dan menerapkan rotasi tanaman untuk mencegah penyebaran penyakit.</td>
                            <td><img src="/assets/assets/img/penyakit2.jpg"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
