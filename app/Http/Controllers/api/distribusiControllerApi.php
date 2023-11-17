<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\distribusi;
use Illuminate\Http\Request;

class distribusiControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil data dengan order
        $data = distribusi::orderBy('judul','asc')->get();

        //kembalikan respon
        return response()->json([
           'data'=> $data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //temukan id yang ingin di ubah
        $data = distribusi::find($id);

        //inisialisasi (inisialisasi semua data jika anda ingin aplikasi dapat merubah semua data)
        $data->status = $request->status;

        // Hanya izinkan kolom status yang di ubah
        //bagian ini dihilangkan jika anda ingin aplikasi dapat merubah semua data
        $data->fill($request->only('status'));

        //simpan
        $data->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
