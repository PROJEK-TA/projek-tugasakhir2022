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
  background-color: #3383F1;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Departemen</h1></center>

<table id="departments">
    <tr>
        <th>No</th>
        <th>Kode Departemen</th>
        <th>Nama Departemen</th>
    </tr>
    <tr>
    @foreach($departemen as $dp)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$dp->kode_departemen}}</td>
            <td>{{$dp->nama_departemen}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
