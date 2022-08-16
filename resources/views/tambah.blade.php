@extends('index')
@section('isi')
    <div class="card-header col-md-4 mt-4">
        <h3>Tambah data</h3>
    </div>
    <form class="mt-3" method="POST" action="{{ route('tambah.proses') }}">
        @csrf
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="text" class="form-control" name="stock">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>

                <textarea type="text" class="form-control" name="keterangan"> </textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tgl">
            </div>
        </div>


        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
