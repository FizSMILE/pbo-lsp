@extends('layouts.index')
@section('content')
<br>
<div class="container col-md-10">
<div class="fs-5 mb-2">Halaman kelola data produk</div>
<div class="tambah-produk mb-3 ">
    <a class="btn btn-primary mb-2" href="/tproduk" role="button">Tambah produk</a>
</div>
    <table class="table table-bordered" style="background: #a0a0a4;">
        <thead>
          <tr>
            <th scope="col">IDProduk</th>
            <th scope="col">Judul Produk</th>
            <th scope="col">Deskripsi Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th class="col-md-2" scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($dataproduk as $k) 
          <tr>
            <th scope="row">{{ $k->idProduk }}</th>
            <td>{{ $k->judulProduk }}</td>
            <td>{{ $k->deskripsi }}</td>
            <td>{{ $k->harga }}</td>
            <td>
            <img src="{{ asset('storage/' . $k->gambar); }}" class="img-fluid" width="170px" style="height: 100px;" alt="">
            </td>
            <td>
                <a class="btn btn-warning col-md-4" href="/editproduk/{{$k->idProduk}}/edit" role="button">Edit</a>
                <form class="d-inline" action="/deleteproduk/{{$k->idProduk}}" method="post">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Hapus">
                </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@if (session()->has('successDelete'))
<script type="text/javascript">
window.onload = function(){
  swal("Success", "{{ session('successDelete') }}", "success");
}
</script>
@endif
@if (session()->has('successTambah'))
<script type="text/javascript">
window.onload = function(){
  swal("Success", "{{ session('successTambah') }}", "success");
}
</script>
@endif
@if (session()->has('successUpdate'))
<script type="text/javascript">
window.onload = function(){
  swal("Success", "{{ session('successUpdate') }}", "success");
}
</script>
@endif
@endsection