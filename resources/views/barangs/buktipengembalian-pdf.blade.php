<!DOCTYPE html>
<html>

<head>
    <title>Bukti Pengembalian Aset Barang</title>
    <style type="text/css">
    table {
        border-style: double;
        border-width: 6px;
        border-color: white;
    }

    table tr .text2 {
        text-align: right;
        font-size: 15px;
    }

    table tr .text {
        text-align: center;
        font-size: 15px;
    }

    table tr td {
        font-size: 15px;
    }
    </style>
</head>

<body>
    <center>
        <h4>Laporan Bukti Pengembalian Aset Barang</h1>
    </center>
    <center>
        <table>
            <tr class="text2">
                <td>Nama Peminjam</td>
                <td width="800">: {{ $pengembalianbarang->nama_peminjam }}</td>
            </tr>
            <tr>
                <td>Kode Peminjaman</td>
                <td width="600">: {{ $pengembalianbarang->kode_peminjaman }}</td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td width="600">: {{ $pengembalianbarang->barang->kode_barang }} -
                    {{ $pengembalianbarang->barang->nama_barang }} ({{ $pengembalianbarang->merk->nama_merkbarang }})
                </td>
            </tr>
            <tr>
                <td>Lokasi Barang</td>
                <td width="600">: {{$pengembalianbarang->lokasi->nama_lokasibarang}}
                    ({{$pengembalianbarang->gudang->nama_gedung}})</td>
            </tr>
            <tr>
                <td>Milik</td>
                <td width="600">: {{$pengembalianbarang->departemen->nama_departemen}}</td>
            </tr>
            <tr>
                <td>Keperluan</td>
                <td width="600">: {{$pengembalianbarang->deskripsi}}</td>
            </tr>
            <tr>
                <td>Petugas Penanggung Jawab Aset IT</td>
                <td width="600">: {{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td width="600">: {{$pengembalianbarang->tanggal_pinjam}}</td>
            </tr>
            <tr>
                <td>Jatuh Tempo</td>
                <td width="600">: {{$pengembalianbarang->tanggal_kembali}}</td>
            </tr>
            <tr>
                <td>Kondisi Barang Setelah Dipinjam</td>
                <td width="600">: {{ $pengembalianbarang->kondisi_setelahdipinjam }}</td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td width="600">: {{ $pengembalianbarang->catatan }}</td>
            </tr>
            <!-- <tr>
                <td>Bukti Pengembalian</td>
                <td width="600">: {{ $pengembalianbarang->bukti_pengembalian }}</td>
            </tr> -->
        </table>
        <br>

        <table width="500">
            <tr>
                <td width="430"><br><br></td>
                <td class="text" align="center">Peminjam<br><br><br><br>(...........................)</td>
            </tr>
        </table>
    </center>
</body>

</html>