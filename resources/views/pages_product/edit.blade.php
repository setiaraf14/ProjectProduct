@extends('layout.master')
@section('judul','Edit Data')
@section('section','Laman Olah Data')
@section('title','Ubah Data')
@section('content')
   {{-- <form action="{{ route('product.update ', ['product' => $product->id_produk]) }}" method="POST"> --}}
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" id="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk') ?? $product->nama_produk  }}">
                @error('nama_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis_produk">Jenis Produk</label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis_produk" id="makanan_ringan" value="MR" {{ (old('jenis_produk') ?? $product->jenis_produk ) == 'MR' ? 'checked' : ' ' }}>
                    <label for="Makanan Ringan" class="form-checked-label">Makanan Ringan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis_produk" id="makanan_berat" value="MB" {{ (old('jenis_produk') ?? $product->jenis_produk ) == 'MB' ? 'checked' : ' ' }}>
                    <label for="perempuan" class="form-checked-label">Makanan Berat</label>
                </div>
                @error('jenis_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="keluar_produk">Keluar Produk</label>
                <input type="date" id="keluar_produk" class="form-control @error('keluar_produk') is-invalid @enderror" name="keluar_produk" value="{{ old('keluar_produk') ?? $product->keluar_produk }}">
                {{-- @error('keluar_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <div class="form-group">
                <label for="masuk_produk">Masuk Produk</label>
                <input type="date" id="masuk_produk" class="form-control @error('masuk_produk') is-invalid @enderror" name="masuk_produk" value="{{ old('masuk_produk') ?? $product->masuk_produk }}">
                {{-- @error('masuk_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <div class="form-group">
                <label for="nama_pengelola">Nama Pengelola</label>
                <input type="text" id="nama_pengelola" class="form-control @error('nama_pengelola') is-invalid @enderror" name="nama_pengelola" value="{{ old('nama_pengelola') ?? $product->nama_pengelola }}">
                @error('nama_pengelola')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nik_pengelola">NIK Pengelola</label>
                <input type="number" id="nik_pengelola" class="form-control @error('nik_pengelola') is-invalid @enderror" name="nik_pengelola" value="{{ old('nik_pengelola') ?? $product->nik_pengelola }}">
                @error('nik_pengelola')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat_pengelola"> Alamat Pengelola</label>
                <textarea name="alamat_pengelola" id="alamat_pengelola" rows="3" class="form-control">
                    {{ old('alamat_pengelola') ?? $product->alamat_pengelola }}
                </textarea>
                @error('alamat_pengelola')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-2">Simpan</button>

        </form>
    
@endsection