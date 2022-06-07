<!DOCTYPE html>
<html>
<head>
<style>
#borrowroom {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#borrowroom td, #borrowroom th {
  border: 1px solid #ddd;
  padding: 8px;
}

#borrowroom tr:nth-child(even){background-color: #f2f2f2;}

#borrowroom tr:hover {background-color: #ddd;}

#borrowroom th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<center><h1>Laporan Data Peminjaman Aset Ruangan</h1></center>

<table id="borrowroom">
    <tr>
        <th>NO</th>
        <th>KODE PEMINJAMAN</th>
        <th>NAMA PEMINJAM</th>
        <th>NAMA RUANGAN</th>
        <th>GUDANG</th>
        <th>DESKRIPSI</th>
        <th>TANGGAL PINJAM</th>
        <th>TANGGAL SELESAI</th>
        <th>STATUS</th>
    </tr>
    <tr>
        @foreach($pinjamruangan as $pr)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pr->id}}</td>
                <td>{{$pr->nama_peminjam}}</td>
                <td>{{$pr->ruangan->nama_ruangan}}</td>
                <td>{{$pr->gudang->nama_gedung}}</td>
                <td>{{$pr->deskripsi}}</td>
                <td>{{$pr->tanggal_pinjam}}</td>
                <td>{{$pr->tanggal_selesai}}</td>
                <td>{{$pr->status}}</td>
            </tr>
        @endforeach
    </tr>
</table>

</body>
</html>
