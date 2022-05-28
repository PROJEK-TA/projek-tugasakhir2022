<!DOCTYPE html>
<html>
<head>
<style>
#roomcategory {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#roomcategory td, #roomcategory th {
  border: 1px solid #ddd;
  padding: 8px;
}

#roomcategorys tr:nth-child(even){background-color: #f2f2f2;}

#roomcategory tr:hover {background-color: #ddd;}

#roomcategory th {
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

<table id="roomcategory">
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
