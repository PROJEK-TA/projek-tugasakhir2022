<!DOCTYPE html>
<html>

<head>
    <style>
    #borrowproduct {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #borrowproduct td,
    #borrowproduct th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #borrowproduct tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #borrowproduct tr:hover {
        background-color: #ddd;
    }

    #borrowproduct th {
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
        <h1>Laporan Data Peminjaman Aset Barang</h1>
    </center>

    <table id="borrowproduct">
        <tr>
            <th>NO</th>
            <th>KODE PINJAM</th>
            <th>NAMA PEMINJAM</th>
            <th>NAMA BARANG</th>
            <!-- <th>MERK</th> -->
            <th>LOKASI</th>
            <th>MILIK</th>
            <!-- <th>JUMLAH</th> -->
            <th>DESKRIPSI</th>
            <th>TANGGAL PINJAM</th>
            <th>JATUH TEMPO</th>
            <th>TANGGAL PENGEMBALIAN</th>
            <th>STATUS</th>
        </tr>
        <tr>
            @foreach($pinjambarang as $rp)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$rp->kode_peminjaman}}</td>
            <td>{{$rp->nama_peminjam}}</td>
            <td>{{$rp->barang->kode_barang}} - {{$rp->barang->nama_barang}} ({{$rp->merk->nama_merkbarang}})</td>
            <td>{{$rp->lokasi->nama_lokasibarang}} ({{$rp->gudang->nama_gedung}})</td>
            <td>{{$rp->departemen->nama_departemen}}</td>
            <!-- <td>{{$rp->jumlah}}</td> -->
            <td>{{$rp->deskripsi}}</td>
            <td>{{$rp->tanggal_pinjam}}</td>
            <td>{{$rp->tanggal_kembali}}</td>
            <td>
                @if($rp->tanggal_pengembalian!=null)
                {{$rp->tanggal_pengembalian}}
                @else
                <span class="badge bg-secondary">belum ada</span>
                @endif
            </td>
            <td>{{$rp->status}}</td>
        </tr>
        @endforeach
        </tr>
    </table>
</body>
</html>