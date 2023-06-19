<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kampus;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addInstansi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi Kebutuhan Inputan
        Request()->validate([
            'instansi' => 'required',
            'deskripsi' => 'required',

        ],
        //Pesan Validasi(Invalid Inputan)
        [
            'instansi.required' => '*Wajib diisi terlebih dahulu',
            'deskripsi.required' => '*Wajib diisi terlebih dahulu',

        ]);

        $data = $request->all();

        Kampus::create($data);

        return redirect()->route('home')->with('pesan', 'Data Berhasil Di Tambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Kampus::findOrFail($id);
        return view ('editKampus',[
            'items' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Kampus::findOrFail($id);
        $item->update($data);
        return redirect()->route('home')->with('pesan', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Kampus::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('home')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
