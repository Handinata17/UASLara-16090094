<?php

namespace App\Http\Controllers;

use App\Paket;
use Illuminate\Http\Request;
use Storage;
class PaketController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket= Paket::all();
        return view('pages.paket.paket',compact('paket'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.paket.create');
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
        $gambar = $request->file('gambar')->store('gambar');
        Paket::create([
            'nama_paket' => $request->nama_paket,
            'gambar' => $gambar
        ]);

        return redirect()->route('paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {

        return view('pages.paket.edit', compact('paket'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        // dd($paket);
       //sdd($request->all());
        if ($request->gambar){
            $gambar_path = $paket->gambar;
            if (Storage::exists($gambar_path)) {
                Storage::delete($gambar_path);
            }
        $gambar = $request->file('gambar')->store('paket');
        $paket->update([
          'nama_paket' => $request->nama_paket,
          'gambar' => $gambar,
        ]);

      }else {
        $paket->update([
          'nama_paket' => $request->nama_paket,
        ]);
      }
        return redirect()->route('paket')->with('success','Paket berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        $foto_path = $paket->gambar;
        if (Storage::exists($foto_path)) {
            Storage::delete($foto_path);
        }
        $paket->delete();
        return redirect()->route('paket')->with('success','Paket berhasil dihapus');
    }
}
