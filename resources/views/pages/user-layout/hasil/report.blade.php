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

        .title {
            margin-top: 3px;
            margin-bottom: 5px;
            text-align: center;
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
                <th width="10%">ID User</th>
                <th width="20%">DateTime</th>
                <th width="20%">Penyakit</th>
                <th width="50%">gejala</th>
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
</body>

</html>
