<!DOCTYPE html>
<html>
<head>
<style>
#productcategory {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#productcategory td, #productcategory th {
  border: 1px solid #ddd;
  padding: 8px;
}

#productcategory tr:nth-child(even){background-color: #f2f2f2;}

#productcategory tr:hover {background-color: #ddd;}

#productcategory th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3383F1;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Kategori Barang</h1></center>

<table id="productcategory">
    <tr>
        <th>No</th>
        <th>Kode Kategori</th>
        <th>Nama Kategori Barang</th>
    </tr>
    <tr>
        @foreach($kategoribarang as $k)
        <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$k->kode_kategori}}</td>
           <td>{{$k->nama_kategbarang}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
