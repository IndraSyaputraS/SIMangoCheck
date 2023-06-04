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
    <style>
        #selectedOptions {
            margin-top: 20px;
        }

    </style>
    <div class="container-fluid px-4 mt-5">
        <h1 class="mt-4">Edit Aturan Penyakit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.pakar') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('aturan.penyakit') }}">Aturan Penyakit</a></li>
            <li class="breadcrumb-item active">Edit Aturan Penyakit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0">Create</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('aturan.penyakit.update', $penyakit->id) }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Penyakit</label>
                        <input name="penyakit" type="text" class="form-control w-75" value="{{ $penyakit->nama_penyakit }}" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Gejala</label>
                        <select class="form-select" id="gejala_id" name="gejala[]" multiple="multiple" aria-label="Default select example">
                            @foreach ( $gejala as $g )
                            <option value="{{ $g->id }}" @foreach ($penyakit->gejala as $pg )
                                @if ($gejala->id == $pg->id)
                                selected
                                @endif
                                @endforeach
                                >{{ $g->nama_gejala }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success mt-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#gejala_id").select2({
                placeholder: "Select a Gejala"
                , allowClear: true
            , });
        });

    </script>
    @endsection
