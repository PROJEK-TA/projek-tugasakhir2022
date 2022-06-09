<!DOCTYPE html>
<html>
<head>
<style>
#buildings {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#buildings td, #buildings th {
  border: 1px solid #ddd;
  padding: 8px;
}

#buildings tr:nth-child(even){background-color: #f2f2f2;}

#buildings tr:hover {background-color: #ddd;}

#buildings th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3383F1;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Gudang</h1></center>

<table id="buildings">
    <tr>
        <th>No</th>
        <th>Kode Gudang</th>
        <th>Nama Gudang</th>
        <th>Alamat</th>
    </tr>
    <tr>
      @foreach($gedung as $bd)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$bd->kode_gudang}}</td>
          <td>{{$bd->nama_gedung}}</td>
          <td>{{$bd->alamat}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
