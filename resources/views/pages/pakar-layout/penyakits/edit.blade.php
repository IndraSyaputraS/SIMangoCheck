@extends('layout.layout')
@section('title')
<title>Dashboard - Pakar</title>
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
    <style>
        #preview {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 1px solid #dee2e6;
            padding: 5px;
        }

    </style>
    <div class="container-fluid px-4 mt-5">
        <h1 class="mt-4">Create Penyakit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.pakar') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('penyakit') }}">Penyakit</a></li>
            <li class="breadcrumb-item active">Create Penyakit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0">Create</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('penyakit.update', ['id'=>$penyakit->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="nama">Nama Penyakit</label>
                        <input name="nama" type="text" class="form-control w-50" value="{{ $penyakit->nama_penyakit }}" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Penyakit</label>
                        <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Deskripsi">{{ $penyakit->deskripsi_penyakit }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Solusi Penyakit</label>
                        <textarea name="solusi" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Solusi">{{ $penyakit->solusi_penyakit }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Obat</label>
                        <select class="form-select" name="obat" aria-label="Default select example">
                            <option selected disabled>Open this select menu</option>
                            @foreach ( $obat as $o )
                            <option value="{{ $o->id }}" @if ($penyakit->kode_obat == $o->id)
                                selected
                                @endif>{{ $o->nama_obat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="margin-bottom: 5px;">Pilih Gambar</label>
                        <div style="display: flex; flex-direction: column; align-items: left;">
                            <img id="preview" src="#" alt="#" style="width: 200px; height: 200px; object-fit: cover; border: 1px solid #dee2e6; padding: 5px;">
                        </div>
                        <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1" onchange="previewImage(event)">
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-success mt-3">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }

    </script>
    @endsection
