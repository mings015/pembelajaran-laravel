@extends('index')
@section('isi')
    <div class="card-header col-md-4 mt-4">
        <h3>Update data</h3>
    </div>



    @if ($errors->any())
        <div class="col-md-4">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    @endif
    <form class="mt-3" method="POST" action="{{ route('update.proses', $data->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="{{ $data->nama_barang }}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="text" class="form-control" name="stock" value="{{ $data->stock }}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>

                <textarea type="text" class="form-control" name="keterangan">{{ $data->keterangan }} </textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tgl" value="{{ $data->tgl }}">
            </div>
        </div>


        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection
