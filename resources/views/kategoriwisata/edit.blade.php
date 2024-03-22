@extends('adminlte::page')
@section('title', 'Edit Kategori Wisata')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Kategori Wisata</h1>
@stop
@section('content')
    <form action="{{ route('kategoriwisata.update', $kategoriwisata) }}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="kategoriwisata">Kategori Wisata</label>
                            <input type="text" class="form-control
@error('kategoriwisata') is-invalid @enderror"
                                id="kategori_wisata" placeholder="Kategori Wisata" name="kategori_wisata"
                                value="{{ $kategori_wisata->kategori_wisata ?? old('kategori_wisata') }}">
                            @error('kategori_wisata')
                                <span class="textdanger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('kategoriwisata.index') }}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @stop
