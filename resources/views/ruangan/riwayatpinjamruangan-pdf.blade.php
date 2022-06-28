<!DOCTYPE html>
<html>

<head>
    <style>
    #borrowroom {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #borrowroom td,
    #borrowroom th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #borrowroom tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #borrowroom tr:hover {
        background-color: #ddd;
    }

    #borrowroom th {
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
        <h1>Laporan Data Peminjaman Aset Ruangan</h1>
    </center>

    <table id="borrowroom">
        <tr>
            <th>NO</th>
            <th>KODE PEMINJAMAN</th>
            <th>NAMA PEMINJAM</th>
            <th>NAMA RUANGAN</th>
            <th>GUDANG</th>
            <th>DESKRIPSI</th>
            <th>TANGGAL PINJAM</th>
            <th>JATUH TEMPO</th>
            <th>TANGGAL SELESAI</th>
            <th>STATUS</th>
        </tr>
        <tr>
            @foreach($riwayatpinjamruangan as $rp)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$rp->kode_peminjaman}}</td>
                    <td>{{$rp->nama_peminjam}}</td>
                    <td>{{$rp->ruangan->kode_ruangan}} - {{$rp->ruangan->nama_ruangan}}</td>
                    <td>{{$rp->gudang->nama_gedung}}</td>
                    <td>{{$rp->deskripsi}}</td>
                    <td>{{$rp->tanggal_pinjam}}</td>
                    <td>{{$rp->tanggal_selesai}}</td>
                    <td>
                        @if($rp->tgl_selesai!=null)
                        {{$rp->tgl_selesai}}
                        @else
                        -
                        @endif
                    </td>
                    <td>{{$rp->status}}</td>
                </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>