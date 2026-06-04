<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $grafikmhs = DB::select("SELECT prodis.nama_prodi,
                                COUNT(*) as jumlah_mhs
                                FROM mahasiswas
                                JOIN prodis
                                ON mahasiswas.prodi_id = prodis.id
                                GROUP BY prodis.nama_prodi");

        return view('dashboard', compact('grafikmhs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
