@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('action.barang') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <h3 class="my-4">Tambah Barang Here.</h3>
                <div class="mb-3">
                    <label for="nameBarang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="nameBarang">
                </div>
                <div class="mb-3">
                    <label for="tglBarang" class="form-label">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="tglBarang">

                </div>
                <div class="mb-3">
                    <label for="hargaAwalBarang" class="form-label">Harga Awal</label>
                    <input type="number" name="harga_awal" class="form-control" id="hargaAwalBarang">
                </div>
                <div class="mb-3">
                    <label for="deskBarang" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskBarang" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="KategoriBarang" class="form-label">Kategori Barang</label>
                    <select class="form-select" name="kategori" aria-label="Default select example">
                        <option>Select one</option>
                        <option value="1">Elektronik</option>
                        <option value="2">Fashion</option>
                        <option value="3">Gadget</option>
                        <option value="4">Vehicle</option>
                        <option value="5">Game dan hobi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="GambarBarang" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="GambarBarang">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Setuju dengan <a href="">Persyaratan &
                            Ketentuan</a></label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
