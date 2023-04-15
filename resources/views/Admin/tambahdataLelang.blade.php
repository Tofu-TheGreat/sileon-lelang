@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('action.lelang') }}" method="POST">
                @csrf
                <h3 class="my-4">Tambah Barang Here.</h3>
                <div class="mb-3">
                    <select class="form-select" name="id_barang" aria-label="Default select example">
                        @foreach ($databarang as $item)
                            <option value="{{ $item->id_barang }}">{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tglBarang" class="form-label">Batas Tanggal Lelang</label>
                    <input type="date" name="tgl_lelang" class="form-control" id="tglBarang">

                </div>
                <div class="mb-3">
                    <label for="hargaAwalBarang" class="form-label">Harga Akhir</label>
                    <input type="number" name="harga_akhir" class="form-control" id="hargaAwalBarang">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="id_user" aria-label="Default select example">
                        @foreach ($datapetugas as $petugas)
                            <option value="{{ $petugas->id_user }}">{{ $petugas->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option value="dibuka">DIBUKA</option>
                        <option value="ditutup">DITUTUP</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
