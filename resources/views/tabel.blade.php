@extends('index')
@section('isi')
    <a href="{{ route('tambah.tampilan') }}" type="button" class="btn btn-primary mt-5 mb-2 ">Create</a>

    @if (session()->has('message'))
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Stock</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Tanggal</th>
                <th scope="col" class="text-center">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($gudang as $gudangs)
                <tr>

                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $gudangs->nama_barang }}</td>
                    <td>{{ $gudangs->stock }}</td>
                    <td>{{ $gudangs->keterangan }}</td>
                    <td>{{ $gudangs->tgl }}</td>
                    <td>
                        <div class="row text-center">
                            <div class="col-7">
                                <a href="{{ route('update.tampilan', $gudangs->id) }}" class="btn btn-primary">Update</a>
                            </div>
                            <div class="col-1">
                                <form action="{{ route('delete', $gudangs->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('yakin jaki kah?')">Delete</button>
                                </form>
                            </div>
                        </div>


                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
