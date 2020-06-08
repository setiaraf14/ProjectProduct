@extends('layout.master')
@section('judul','Detail Data')
@section('section','Laman Olah Data')
@section('title','Show Data')
@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    Nama Produk :  {{ $product->nama_produk }}
                </a>
                <a href="#" class="list-group-item list-group-item-action">Jenis Produk : {{ $product->jenis_produk }}</a>
                <a href="#" class="list-group-item list-group-item-action">Tanggal Keluar Produk : {{ $product->keluar_produk }}</a>
                <a href="#" class="list-group-item list-group-item-action">Tanggal Masuk Produk : {{ $product->masuk_produk }}</a>
                <a href="#" class="list-group-item list-group-item-action">Nama Pengelola : {{ $product->nama_pengelola }}</a>
                <a href="#" class="list-group-item list-group-item-action">Nik Pengelola : {{ $product->nik_pengelola }}</a>
                <a href="#" class="list-group-item list-group-item-action">Alamat Pengelola : {{ $product->alamat_pengelola==''?'N/A':$product->alamat_pengelola }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
