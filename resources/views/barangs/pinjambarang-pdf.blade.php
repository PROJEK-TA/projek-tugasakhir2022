<!DOCTYPE html>
<html>
<head>
<style>
#borrowproduct {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#borrowproduct td, #borrowproduct th {
  border: 1px solid #ddd;
  padding: 8px;
}

#borrowproduct tr:nth-child(even){background-color: #f2f2f2;}

#borrowproduct tr:hover {background-color: #ddd;}

#borrowproduct th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Peminjaman Aset Barang</h1></center>

<table id="borrowproduct">
    <tr>
        <th>NO</th>
        <th>KODE PINJAM</th>
        <th>NAMA PEMINJAM</th>
        <th>NAMA BARANG</th>
        <th>MERK</th>
        <th>LOKASI</th>
        <th>MILIK</th>
        <th>JUMLAH</th>
        <th>DESKRIPSI</th>
        <th>TANGGAL PINJAM</th>
        <th>TANGGAL KEMBALI</th>
        <th>STATUS</th>
    </tr>
    <tr>
        @foreach($pinjambarang as $pb)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pb->id}}</td>
                <td>{{$pb->nama_peminjam}}</td>
                <td>{{$pb->barang->nama_barang}}</td>
                <td>{{$pb->merk->nama_merkbarang}}</td>
                <td>{{$pb->lokasi->nama_lokasi}}</td>
                <td>{{$pb->departemen->nama_departemen}}</td>
                <td>{{$pb->jumlah}}</td>
                <td>{{$pb->deskripsi}}</td>
                <td>{{$pb->tanggal_pinjam}}</td>
                <td>{{$pb->tanggal_kembali}}</td>
                <td>{{$pb->status}}</td>
            </tr>
        @endforeach
    </tr>
</table>

</body>
</html>
