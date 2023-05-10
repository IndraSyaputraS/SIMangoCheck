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
    <style>
        #preview {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 1px solid black;
            padding: 5px;
        }

    </style>
    <div class="container-fluid px-4 mt-5">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-pakar') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('penyakit') }}">Penyakit</a></li>
            <li class="breadcrumb-item active">Create Penyakit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0">Create</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID Penyakit</label>
                        <input type="text" class="form-control w-25" id="exampleFormControlInput1" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Penyakit</label>
                        <input type="text" class="form-control w-50" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Penyakit</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Solusi Penyakit</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Solusi"></textarea>
                    </div>
                    <div class="form-group">
                        <label style="margin-bottom: 5px;">Pilih Gambar</label>
                        <div style="display: flex; flex-direction: column; align-items: left;">
                            <img id="preview" src="#" alt="#" style="width: 200px; height: 200px; object-fit: cover; border: 1px solid gray; padding: 5px;">
                        </div>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" onchange="previewImage(event)">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success"><a href="{{ route('penyakit.create') }}"></a>Create</button>
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
