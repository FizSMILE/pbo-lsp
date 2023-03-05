<?php

namespace App\Http\Controllers;

use App\Models\Tb_produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = Tb_produk::count();
        return view('home', compact('count'));
    }

    public function dataproduk()
    {
        $dataproduk = Tb_produk::all();
        return view('dataproduk', compact(['dataproduk']));
    }

    public function tproduk()
    {
        return view('tproduk');
    }

    public function tprodukstore(Request $request)
    {

       $validatedData = $request->validate([
        'judulProduk' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required',
        'gambar' => 'image|file|max:5000|'
       ]);

       if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-gambar');
       } else {
              $validatedData['gambar'] = "post-gambar/empty.jpg";
       }

         Tb_produk::create($validatedData);

         return redirect('/dataproduk')->with('successTambah', '( Produk berhasil di tambah )');
    }


    public function editproduk($idProduk){
        $dataproduk = Tb_produk::where('idProduk', $idProduk)->first();
        return view('editproduk', compact(['dataproduk']));
    }

    public function update($idProduk, Request $request)
    {
        $dataproduk = Tb_produk::where('idProduk', $idProduk);
        $validatedData = $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            // 'gambar' => 'image|file|max:1024'
           ]);
    
        //    if($request->file('gambar')) {
        //         $validatedData['gambar'] = $request->file('gambar')->store('post-gambar');
        //    }
    
           $dataproduk->update($validatedData);
           return redirect('/dataproduk')->with('successUpdate', '( Produk berhasil di update )');
        
    }

    public function destroy($idProduk)
    {
        $dataProduk = Tb_produk::where('idProduk', $idProduk);
        $dataProduk->delete();
        return redirect('/dataproduk')->with('successDelete', '( Produk berhasil di hapus )');
    }
}



