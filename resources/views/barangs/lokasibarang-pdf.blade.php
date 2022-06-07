<!DOCTYPE html>
<html>
<head>
<style>
#locationproduct {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#locationproduct td, #locationproduct th {
  border: 1px solid #ddd;
  padding: 8px;
}

#locationproduct tr:nth-child(even){background-color: #f2f2f2;}

#locationproduct tr:hover {background-color: #ddd;}

#locationproduct th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Lokasi Barang</h1></center>

<table id="locationproduct">
    <tr>
        <th>No</th>
        <th>Kode Lokasi</th>
        <th>Nama Lokasi</th>
    </tr>
    <tr>
        @foreach($lokasibarang as $l)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$l->kode_lokasi}}</td>
            <td>{{$l->nama_lokasibarang}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
