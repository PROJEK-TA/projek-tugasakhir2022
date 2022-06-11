<!DOCTYPE html>
<html>

<head>
    <style>
    #merk {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #merk td,
    #merk th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #merk tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #merk tr:hover {
        background-color: #ddd;
    }

    #merk th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #3383F1;
        color: white;
    }
    </style>
</head>

<body>

    <center>
        <h1>Laporan Daftar Merk Barang</h1>
    </center>

    <table id="merk">
        <tr>
            <th>NO</th>
            <th>KODE MERK</th>
            <th>MERK</th>
        </tr>
        <tr>
            @foreach($merk as $m)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$m->kode_merk}}</td>
            <td>{{$m->nama_merkbarang}}</td>
        </tr>
        @endforeach
        </tr>
    </table>

</body>

</html>