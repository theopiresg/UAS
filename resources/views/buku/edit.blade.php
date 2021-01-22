@extends('layout.main')
@section('title', 'Data Buku Perpustakaan')
@section('content')

    <div class="container">
        <div class="jumbotron">
        <h1 class="display-6">Edit Data Buku</h1>
        <hr class="my-4">     
        <form action="/buku" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="judul_buku">Judul Buku</label>
        <input type="text" class="form-control" name="judul_buku" 
                            placeholder="Judul Buku" value="{{ old('judul_buku') }}">
        </div>
        <div class="form-group">
        <label for="deskripsi">Deskripsi Buku</label>
        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Buku" value="{{ old('deskripsi') }}">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori Buku</label>
            <select class="form-control" id="kategori" name="kategori">
            @foreach ($kategori as $kat)
                <option value="{{ $kat->kategori }}">
                {{ $kat->deskripsi }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
        </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

@endsection
