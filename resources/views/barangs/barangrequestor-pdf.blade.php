<!DOCTYPE html>
<html>
<head>
<style>
#barang {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#barang td, #barang th {
  border: 1px solid #ddd;
  padding: 8px;
}

#barang tr:nth-child(even){background-color: #f2f2f2;}

#barang tr:hover {background-color: #ddd;}

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

<center><h1>Laporan Daftar Barang</h1></center>

<table id="barang">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Merk</th>
        <th>Kategori</th>
        <th>Lokasi</th>
        <th>Owner</th>
        <th>Harga Beli</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Status</th>
    </tr>
    <tr>
        @foreach($barangrequestor as $br)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$br->kode_barang}}</td>
                <td>{{$br->nama_barang}}</td>
                <td>{{$br->merek->nama_merkbarang}}</td>
                <td>{{$br->productcategory->nama_kategbarang}}</td>
                <td>{{$br->lokasi->nama_lokasibarang}}</td>
                <td>{{$br->departemen->nama_departemen}}</td>
                <td>{{$br->harga_beli}}</td>
                <td>{{$br->jumlah}}</td>
                <td>{{$br->satuan}}</td>
                <td>{{$br->status->nama_statusbarang}}</td>
            </tr>
        @endforeach
    </tr>
</table>

</body>
</html>
