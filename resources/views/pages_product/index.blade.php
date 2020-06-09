@extends('layout.master')
@section('judul','Data Table')
@section('section','Dashboard')
@section('title','index')
@section('content')
<div class="m-auto">
    @if(session('Pesan'))
        <div class="{{ session('alert') }}">
            {{ session('Pesan') }}
        </div>
    @endif
    {{-- <a class="btn btn-primary mb-3" href="{{ route('product.create') }}"
    role="button">Tambah Data</a> --}}
    <br>
    <table class="table display mt-3" id="data_users_reguler" class="display" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Keluar Produk</th>
                <th scope="col">Masuk Produk</th>
                <th scope="col">Nama Penglola</th>
                <th scope="col">Nik Pengelola</th>
                <th scope="col">Alamat Penglola</th>
                <th scope="col" colspan="3"class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->jenis_produk == 'MB' ? 'Makanan Berat' : 'Laki-laki' }}
                    </td>
                    <td>{{ $item->keluar_produk }}</td>
                    <td>{{ $item->masuk_produk }}</td>
                    <td>{{ $item->nama_pengelola }}</td>
                    <td>{{ $item->nik_pengelola }}</td>
                    <td>{{ $item->alamat_pengelola==''?'N/A':$item->alamat_pengelola }}
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('product.show', ['product' => $item->id_produk]) }}"
                                class="btn btn-info p-1 ml-1">Show</a>
                            <a href="{{ route('product.edit', ['product' => $item->id_produk]) }}"
                                class="btn btn-success p-1 ml-1">Edit</a>
                            <form
                                action="{{ route('product.destroy', ['product'=> $item->id_produk] ) }}"
                                method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger p-1 ml-1">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function () {
        $('#data_users_reguler').DataTable();
    });

</script>
<script src="{{ asset('BackEnd/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('BackEnd/js/jquery.dataTables.min.js') }}"></script>

@endsection
