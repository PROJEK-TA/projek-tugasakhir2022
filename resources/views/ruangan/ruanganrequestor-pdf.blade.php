<!DOCTYPE html>
<html>

<head>
    <style>
    #ruangan {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #ruangan td,
    #ruangan th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #ruangan tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #ruangan tr:hover {
        background-color: #ddd;
    }

    #ruangan th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    </style>
</head>

<body>

    <center>
        <h1>Laporan Daftar Ruangan</h1>
    </center>

    <table id="ruangan">
        <tr>
            <th>No</th>
            <th>Kode Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Kategori</th>
            <th>Gudang</th>
        </tr>
        <tr>
            @foreach($ruanganrequestor as $r)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$r->id}}</td>
            <td>{{$r->nama_ruangan}}</td>
            <td>{{$r->roomcategory->nama_kategruangan}}</td>
            <td>{{$r->building->nama_gedung}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>