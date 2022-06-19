<!DOCTYPE html>
<html>

<head>
    <style>
    #serviceproduct {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #serviceproduct td,
    #serviceproduct th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #serviceproduct tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #serviceproduct tr:hover {
        background-color: #ddd;
    }

    #serviceproduct th {
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
        <h1>Laporan Data Barang di Servis</h1>
    </center>

    <table id="serviceproduct">
        <tr>
            <th>No</th>
            <th>KODE SERVIS</th>
            <th>NAMA BARANG</th>
            <th>LOKASI</th>
            <th>DESKRIPSI</th>
            <th>NAMA PETUGAS</th>
            <th>TANGGAL SERVIS</th>
            <th>TANGGAL KEMBALI</th>
        </tr>
        <tr>
            @foreach($servisbarang as $s)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$s->kode_servis}}</td>
            <td>{{$s->barang->kode_barang }} - {{ $s->barang->nama_barang }} ({{ $s->merk->nama_merkbarang }})</td>
            <td>{{$s->lokasi->nama_lokasibarang}} ({{$s->gudang->nama_gedung}})</td>
            <td>{{$s->deskripsi}}</td>
            <td>{{$s->nama_petugas}}</td>
            <td>{{$s->tanggal_servis}}</td>
            <td>{{$s->tanggal_kembali}}</td>
        </tr>
        @endforeach
        </tr>
    </table>

</body>

</html>