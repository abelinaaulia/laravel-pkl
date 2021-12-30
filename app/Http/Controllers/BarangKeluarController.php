<?php

namespace App\Http\Controllers;

use App\Models\Barang_Keluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang_Keluar  $barang_Keluar
     * @return \Illuminate\Http\Response
     */
    public function show(Barang_Keluar $barang_Keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang_Keluar  $barang_Keluar
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang_Keluar $barang_Keluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang_Keluar  $barang_Keluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang_Keluar $barang_Keluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang_Keluar  $barang_Keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang_Keluar $barang_Keluar)
    {
        //
    }
}
