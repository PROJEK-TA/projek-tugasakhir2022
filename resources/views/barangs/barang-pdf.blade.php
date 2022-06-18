<!DOCTYPE html>
<html>

<head>
    <style>
    #barang {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #barang td,
    #barang th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #barang tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #barang tr:hover {
        background-color: #ddd;
    }

    #barang th {
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
        <h1>Laporan Daftar Barang</h1>
    </center>

    <table id="barang">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <!-- <th>Merk</th> -->
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Owner</th>
            <th>Harga Beli</th>
            <!-- <th>Jumlah</th>
            <th>Satuan</th> -->
            <th>Status</th>
            <th>Tanggal Input</th>
        </tr>
        <tr>
            @foreach($barang as $b)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$b->kode_barang}}</td>
            <td>{{$b->nama_barang}} ({{$b->merek->nama_merkbarang}})</td>
            <td>{{$b->productcategory->nama_kategbarang}}</td>
            <td>{{$b->lokasi->nama_lokasibarang}} ({{$b->gudang->nama_gedung}})</td>
            <td>{{$b->departemen->nama_departemen}}</td>
            <td>{{$b->harga_beli}}</td>
            <!-- <td>{{$b->jumlah}}</td>
            <td>{{$b->satuan}}</td> -->
            <td>{{$b->status->nama_statusbarang}}</td>
            <td>{{$b->tanggal_input}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>