<!DOCTYPE html>
<html>
<head>
<style>
#nonaktifproduct {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#nonaktifproduct td, #nonaktifproduct th {
  border: 1px solid #ddd;
  padding: 8px;
}

#nonaktifproduct tr:nth-child(even){background-color: #f2f2f2;}

#nonaktifproduct tr:hover {background-color: #ddd;}

#nonaktifproduct th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3383F1;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Barang Nonaktif</h1></center>

<table id="nonaktifproduct">
    <tr>
        <th>NO</th>
        <th>KODE NONAKTIF</th>
        <th>NAMA BARANG</th>
        <th>MERK</th>
        <th>LOKASI</th>
        <th>DESKRIPSI</th>
        <th>JUMLAH</th>
        <th>STATUS</th>
        <th>TANGGAL NONAKTIF</th>
    </tr>
    <tr>
        @foreach($barangnonaktif as $bn)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$bn->kode_nonaktif}}</td>
                <td>{{$bn->barang->nama_barang}}</td>
                <td>{{$bn->merk->nama_merkbarang}}</td>
                <td>{{$bn->lokasi->nama_lokasibarang}}</td>
                <td>{{$bn->deskripsi}}</td>
                <td>{{$bn->jumlah}}</td>
                <td>{{$bn->status->nama_statusbarang}}</td>
                <td>{{$bn->tanggal_nonaktif}}</td>
            </tr>
        @endforeach
    </tr>
</table>

</body>
</html>
