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
        <h5>Laporan Pemenang Lelang</h5>

        <h4>Situs Lelang Online (SiLeOn)</h4>
    </center>

    <div class="container mt-3">
        @foreach ($history as $p)
            <h6>Nama Pemenang : </h6>
            <p>{{ $p->nama_lengkap }}</p>
            <h6>Tanggal : </h6>
            <p>{{ $p->created_at }}</p>
            <h6>Alamat Email: </h6>
            <p>{{ $p->email }}</p>
            <h6>Nama Barang : </h6>
            <p>{{ $p->nama_barang }}</p>
            <h6>Gambar : </h6>
            <p><img src="image_save/{{ $p->gambar }}" height="150px" width="175px" alt=""></p>
        @endforeach
    </div>

</body>

</html>
