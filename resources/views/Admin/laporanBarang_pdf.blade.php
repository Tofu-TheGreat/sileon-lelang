<!DOCTYPE html>
<html>

<head>
    <title>Sileon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Barang untuk Pelelangan</h5>

        <h4>Situs Lelang Online (SiLeOn)</h4>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tanggal Masuk</th>
                <th>Harga Awal</th>
                <th>Deskripsi Barang</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($barang as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->nama_barang }}</td>
                    <td>{{ $p->tgl }}</td>
                    <td>{{ $p->harga_awal }}</td>
                    <td>{{ $p->deskripsi_barang }}</td>
                    <td><img src="image_save/{{ $p->gambar }}" height="150px" width="175px" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
