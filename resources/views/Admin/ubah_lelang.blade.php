@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.lelang') }}" method="POST">
                @csrf
                <h3 class="my-4">Update Lelang Here.</h3>
                @foreach ($lelang as $lelangs)
                    <input type="hidden" name="id_lelang" value="{{ $lelangs->id_lelang }}">
                    <div class="mb-3">
                        <select class="form-select" name="id_barang" aria-label="Default select example">
                            @foreach ($databarang as $item)
                                <option value="{{ $item->id_barang }}"
                                    {{ $lelangs->id_barang == $item->id_barang ? 'Selected' : '' }}>
                                    {{ $item->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tglBarang" class="form-label">Batas Tanggal Lelang</label>
                        <input type="date" value="{{ $lelangs->tgl_lelang }}" name="tgl_lelang" class="form-control"
                            id="tglBarang">

                    </div>
                    <div class="mb-3">
                        <label for="hargaAwalBarang" class="form-label">Harga Akhir</label>
                        <input type="number" value="{{ $lelangs->harga_akhir }}" name="harga_akhir" class="form-control"
                            id="hargaAwalBarang">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="id_user" aria-label="Default select example">
                            @foreach ($datapetugas as $petugas)
                                <option value="{{ $petugas->id_user }}"
                                    {{ $lelangs->id_user == $petugas->id_user ? 'Selected' : '' }}>
                                    {{ $petugas->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option value="dibuka" {{ $lelangs->status == 'dibuka' ? 'Selected' : '' }}>DIBUKA</option>
                            <option value="ditutup" {{ $lelangs->status == 'ditutup' ? 'Selected' : '' }}>DITUTUP</option>
                        </select>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
