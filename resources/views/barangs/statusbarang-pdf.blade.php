<!DOCTYPE html>
<html>

<head>
    <style>
    #statusbarang {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #statusbarang td,
    #statusbarang th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #statusbarang tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #dstatusbarang tr:hover {
        background-color: #ddd;
    }

    #statusbarang th {
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
        <h1>Laporan Daftar Status Barang</h1>
    </center>

    <table id="statusbarang">
        <tr>
            <th>NO</th>
            <th>KODE STATUS</th>
            <th>STATUS</th>
        </tr>
        <tr>
            @foreach($status as $s)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$s->kode_status}}</td>
            <td>{{$s->nama_statusbarang}}</td>
        </tr>
        @endforeach
        </tr>
    </table>

</body>

</html>