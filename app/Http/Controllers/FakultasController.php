<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Fakultas::all(); // select * from fakultas
        // dd($result);
        return view('fakultas.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data
        $input = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas',
            'singkatan' => 'required',
            'dekan' => 'required'
        ]);

        // simpan data ke tabel fakultas
        Fakultas::create($input);

        // redirect ke halaman index fakultas
        return redirect()->route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        dd($fakultas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //$fakultas = Fakultas::find($fakultas); // cari data berdasarkan id
        // dd($fakultas);
        return view ('fakultas.edit', compact
        ('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
         $input = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas,nama_fakultas,'.$fakultas,
             //validasi unik kecuali data yang sedang diedit
             'singkatan' => 'required'
        ]);

        // simpan perubahan data ke tabel fakultas
        Fakultas::where('id', $fakultas)->update($input);

        // redirect ke route fakultas.index
        return redirect()->route('fakultas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fakultas)
    {

        $fakultas = Fakultas::find($fakultas, 'id'); //
        //cari data berdasarkan id
        $fakultas->delete(); //hapus data fakultas
        return redirect()->route('fakultas.index');
        //
    }
}
