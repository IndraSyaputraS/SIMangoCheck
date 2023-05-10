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

        #selectedOptions {
            margin-top: 20px;
        }

    </style>
    <div class="container-fluid px-4 mt-5">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-pakar') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('aturan') }}">Aturan</a></li>
            <li class="breadcrumb-item active">Create Aturan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="my-0">Create</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="selectOptions">Select Options:</label>
                        <select multiple class="form-control" id="selectOptions">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleFormControlInput1">gejala</label>
                        <input type="text" class="form-control w-25" id="exampleFormControlInput1" placeholder="ID">
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Penyakit</label>
                        <input type="text" class="form-control w-75" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Hama</label>
                        <input type="text" class="form-control w-75" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success"><a href="#"></a>Create</button>
                    </div>
                </form>
                <div id="selectedOptions"></div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('selectOptions').addEventListener('change', function() {
            var selectedOptions = Array.from(this.selectedOptions).map(function(option) {
                return option.text;
            });
            document.getElementById('selectedOptions').innerHTML = '<strong>Selected Options:</strong> ' + selectedOptions.join(', ');

            var selectedOptionsList = document.getElementById('selectedOptionsList');
            selectedOptionsList.innerHTML = '';
            selectedOptions.forEach(function(option) {
                var li = document.createElement('li');
                li.textContent = option;
                selectedOptionsList.appendChild(li);
            });
        });

    </script>
    @endsection
