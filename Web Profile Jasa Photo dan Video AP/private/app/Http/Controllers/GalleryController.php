<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Storage;

class GalleryController extends Controller
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
        $gallery = Gallery::all();
        return view('pages.gallery.gallery', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.gallery.create');
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
        Gallery::create([
            'nama' => $request->nama,
            'description' => $request->description,
            'gambar' => $gambar
        ]);

        return redirect()->route('gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('pages.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
             if ($request->gambar){
            $gambar_path = $gallery->gambar;
            if (Storage::exists($gambar_path)) {
                Storage::delete($gambar_path);
            }
        $gambar = $request->file('gambar')->store('gallery');
        $gallery->update([
          'nama' => $request->nama,
          'description' => $request->description,
          'gambar' => $gambar,
        ]);

      }else {
        $gallery->update([
          'nama' => $request->nama,
          'description' => $request->description,
        ]);
      }
        return redirect()->route('gallery')->with('success','gambar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gambar_path = $gallery->gambar;
        if (Storage::exists($gambar_path)) {
            Storage::delete($gambar_path);
        }
        $gallery->delete();
        return redirect()->route('gallery')->with('success','gambar berhasil dihapus');
    }
}
