<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Barang_Masuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
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
        $barang_masuk = Barang_Masuk::with('barang')->get();
        return view('barang_masuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('barang_masuk.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'tgl_masuk' => 'required',

        ]);

        $barang_masuk = new Barang_Masuk;
        $barang_masuk->id_barang = $request->id_barang;
        $barang_masuk->nama_barang = $request->nama_barang;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->tgl_masuk = $request->tgl_masuk;
        $barang_masuk->save();
        return redirect()->route('barang_masuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang_masuk = Barang_Masuk::findOrFail($id);
        return view('barang_masuk.show', compact('barang_masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang_masuk = Barang_masuk::findOrFail($id);
        $barang= Barang::all();
        return view('barang_masuk.edit', compact('barang_masuk', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'tgl_masuk' => 'required',

        ]);

        $barang_masuk = new Barang_Masuk;
        $barang_masuk->id_barang = $request->id_barang;
        $barang_masuk->nama_barang = $request->nama_barang;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->tgl_masuk = $request->tgl_masuk;
        $barang_masuk->save();
        return redirect()->route('barang_masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang_masuk = Barang_Masuk::findOrFail($id);
        $barang_masuk->delete();
        return redirect()->route('barang_masuk.index');
    }
}
