<!DOCTYPE html>
<html>

<head>
    <style>
    #daftaruser {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #daftaruser td,
    #daftaruser th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #daftaruser tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #daftaruser tr:hover {
        background-color: #ddd;
    }

    #daftaruser th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #3383F1;
        color: white;
    }
    </style>
</head>

<body>

    <center>
        <h1>Laporan Daftar User</h1>
    </center>

    <table id="daftaruser">
        <tr>
            <th>NO</th>
            <th>ID USER</th>
            <th>NAMA USER</th>
            <th>EMAIL</th>
            <th>KONTAK</th>
            <th>ALAMAT</th>
            <th>JABATAN</th>
            <th>ROLE</th>
        </tr>
        <tr>
            @foreach($user as $us)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$us->kode_user}}</td>
            <td>{{$us->name}}</td>
            <td>{{$us->email}}</td>
            <td>{{$us->kontak}}</td>
            <td>{{$us->alamat}}</td>
            <td>{{$us->jabatan->nama_jabatan}}</td>
            <td>{{$us->role}}</td>
        </tr>
        @endforeach
        </tr>
    </table>

</body>

</html>