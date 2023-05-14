@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.barang') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <h3 class="my-4">Update Barang Here.</h3>
                @foreach ($barang as $barangs)
                    <input type="hidden" name="id_barang" value="{{ $barangs->id_barang }}">
                    <div class="mb-3">
                        <label for="nameBarang" class="form-label">Nama Barang</label>
                        <input type="text" value="{{ $barangs->nama_barang }}" name="nama_barang" class="form-control"
                            id="nameBarang">
                    </div>
                    <div class="mb-3">
                        <label for="tglBarang" class="form-label">Tanggal</label>
                        <input type="date" value="{{ $barangs->tgl }}" name="tgl" class="form-control"
                            id="tglBarang">

                    </div>
                    <div class="mb-3">
                        <label for="hargaAwalBarang" class="form-label">Harga Awal</label>
                        <input type="number" value="{{ $barangs->harga_awal }}" name="harga_awal" class="form-control"
                            id="hargaAwalBarang">
                    </div>
                    <div class="mb-3">
                        <label for="deskBarang" class="form-label">Deskripsi Barang</label>
                        <textarea name="deskripsi_barang" class="form-control" id="deskBarang" rows="3">{{ $barangs->deskripsi_barang }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="KategoriBarang" class="form-label">Kategori Barang</label>
                        <select class="form-select" name="kategori" aria-label="Default select example">
                            <option>Select one</option>
                            <option value="1" {{ $barangs->kategori == '1' ? 'selected' : '' }}>Elektronik</option>
                            <option value="2" {{ $barangs->kategori == '2' ? 'selected' : '' }}>Fashion</option>
                            <option value="3" {{ $barangs->kategori == '3' ? 'selected' : '' }}>Gadget</option>
                            <option value="4" {{ $barangs->kategori == '4' ? 'selected' : '' }}>Vehicle</option>
                            <option value="5" {{ $barangs->kategori == '5' ? 'selected' : '' }}>Game dan hobi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="GambarBarang" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="GambarBarang">
                        <img src="../image_save/{{ $barangs->gambar }}" height="150px" width="150px" alt="">
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
