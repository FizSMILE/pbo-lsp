<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tb_produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ambilsemua()
    {
        $dataProduk = Tb_produk::all();
        Log::info("Menampilkan semua data produk");
        return response()->json([
            'data' => $dataProduk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambahproduk(Request $request)
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
            $dataProduk = Tb_produk::where('judulProduk', $request->judulProduk)->where('deskripsi', $request->deskripsi)->first();
                Log::info("Menambahkan data produk");
             return response()->json([
                'message' => 'berhasil',
                'data' => $dataProduk
            ]);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tb_produk  $tb_produk
     * @return \Illuminate\Http\Response
     */
    public function ambilsesuaiid($idProduk)
    {
        $dataProduk = Tb_produk::where('idProduk', $idProduk)->first();
        Log::info("Menampilkan data produk sesuai id");
        return response()->json([
            'data' => $dataProduk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tb_produk  $tb_produk
     * @return \Illuminate\Http\Response
     */
    public function updateproduk($idProduk, Request $request){
        $dataProduk = Tb_produk::where('idProduk', $idProduk);
        $dataProduk->update($request->except(['_token'])); 
        $dataProduk = Tb_produk::where('idProduk', $idProduk)->first(); 
        Log::info("Mengupdate data produk"); 
        return response()->json([
            'message' => 'update sukses',
            'data' => $dataProduk
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tb_produk  $tb_produk
     * @return \Illuminate\Http\Response
     */
    public function hapusproduk($idProduk, Tb_produk $Tb_produk)
    {
        $Tb_produk = Tb_produk::where('idProduk', $idProduk);
        $Tb_produk->delete();
        Log::info("Menghapus data produk");
        return response()->json([
            'message' => 'hapus sukses',
        ]);
    }

    public function ambilsemuauser()
    {
        $dataUser = User::all();
        Log::info("Menampilkan semua data user");
        return response()->json([
            'data' => $dataUser
        ]);
    }

    public function ambiltotaluser()
    {
        $totalUser = User::count();
        Log::info("Menampilkan semua data user");
        return response()->json([
            'data' => $totalUser
        ]);
    }




   

    

    

   
}
