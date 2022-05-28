<!DOCTYPE html>
<html>
<head>
<style>
#departments {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#departments td, #departments th {
  border: 1px solid #ddd;
  padding: 8px;
}

#departments tr:nth-child(even){background-color: #f2f2f2;}

#departments tr:hover {background-color: #ddd;}

#departments th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Kategori Ruangan</h1></center>

<table id="departments">
    <tr>
        <th>No</th>
        <th>Kode Kategori Ruangan</th>
        <th>Nama Kategori Ruangan</th>
    </tr>
    <tr>
    @foreach($kategoriruangan as $k)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$k->id}}</td>
            <td>{{$k->nama_kategruangan}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
