<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Penyakit Report</title>
    <style>
        table.GeneratedTable {
            width: 100%;
            background-color: #ffffff;
            border-collapse: collapse;
            border-width: 2px;
            border-color: #0b0e0f;
            border-style: solid;
        }

        table.GeneratedTable th {
            border-width: 2px;
            border-color: #0b0e0f;
            border-style: solid;
            padding: 3px;
        }

        table.GeneratedTable td,
            {
            border-width: 2px;
            border-color: #0b0e0f;
            border-style: solid;
            padding: 3px;
        }

        table.GeneratedTable thead {
            background-color: white;
        }

        .title{
            margin-top : 3px;
            margin-bottom :5px;
            text-align : center;
        }

    </style>
</head>
<body>
    <div class="title">
        <h1>Report Penyakit</h1>
    </div>
    <table class="GeneratedTable">
        <thead>
            <tr>
                <th width="20%">Nama Penyakit</th>
                <th width="35%">Deskripsi</th>
                <th width="30%">Solusi</th>
                <th width="15%">Obat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penyakit as $p)
            <tr>
                <td>{{ $p->nama_penyakit }}</td>
                <td>{{ $p->deskripsi_penyakit}}</td>
                <td>{{ $p->solusi_penyakit}}</td>
                <td>{{ $p->obat->nama_obat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
