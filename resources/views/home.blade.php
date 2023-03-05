{{-- Sambungkan dengan layouts.index --}}
@extends('layouts.index')
{{-- Bagian lain ada di layouts.index --}}

@section('content')
{{-- isi dari yeild content --}}
    <div id="content">
   <div class="container-fluid">
    <br>
    <div class="text-center mt-3 fs-5" >Selamat datang dihalaman dashboard Technopark gallery SMKN 2 Banjarmasin</div> 
    <p class="m-4 fs-5">Jumlah data produk</p>
    <div class="row ms-4">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-center">{{ $count }}<br>Total Produk</p>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
{{-- end isi dari yeild content --}}

@endsection