<!DOCTYPE html>
<html>
<head>
<style>
#jabatan {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#jabatan td, #jabatan th {
  border: 1px solid #ddd;
  padding: 8px;
}

#jabatan tr:nth-child(even){background-color: #f2f2f2;}

#jabatan tr:hover {background-color: #ddd;}

#jabatan th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3383F1;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Jabatan</h1></center>

<table id="jabatan">
    <tr>
        <th>No</th>
        <th>Kode Jabatan</th>
        <th>Nama Jabatan</th>
    </tr>
    <tr>
        @foreach($jabatanuser as $pr)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$pr->kode_jabatan}}</td>
            <td>{{$pr->nama_jabatan}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
