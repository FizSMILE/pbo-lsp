@extends('layouts.index')
@section('content')
<div class="container col-md-10">
    <div class="fs-5 mb-2">Halaman Tambah Produk</div>
    <div class="row">
        <div class="col-sm-8">
            <form action="/tproduk/store" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card" style="background: #a0a0a4;">
                <div class="card-body">
                    <div class="row">
                   <div class="col-md-6">
                    <div class="">
                      <div class="mb-3">
                        <input type="hidden" class="form-control" name="idProduk" id="inputName" placeholder="">
                      </div>
                    </div>
                   </div>
                </div>
                    <div class="row">
                   <div class="col-md-4">Judul Produk</div>
                   <div class="col-md-6">
                    <div class="mb-3">
                      <input type="text" name="judulProduk" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Deskripsi Produk</div>
                    <div class="col-md-6">
                     <div class="mb-3">
                       <input type="text" name="deskripsi" id="" class="form-control" placeholder="" aria-describedby="helpId">
                     </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Harga Produk</div>
                    <div class="col-md-6">
                     <div class="mb-3">
                       <input type="text" name="harga" id="" class="form-control" placeholder="" aria-describedby="helpId">
                     </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Upload Gambar</div>
                    <div class="col-md-6">
                    <div class="mb-3">
                      <input type="file" class="form-control" name="gambar" id="gambar" placeholder="" aria-describedby="fileHelpId">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <input class="btn btn-primary" type="submit" value="Simpan">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection