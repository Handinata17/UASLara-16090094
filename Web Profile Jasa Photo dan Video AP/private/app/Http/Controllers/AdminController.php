<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }
          public function galleryEdit($id){
        $gallery = Gallery::find($id);
        return view('pages.gallery.edit', compact('gallery'));
    }

    public function galleryUpdate($id, Request $request)

    {

        $gallery = Gallery::find($id);
        $gallery->nama = $request->nama;
        $gambar = $request->file('gambar');
        if ($gambar == '') {
            $gallery->gambar = $request->old_gambar;
        }else{
            $nama = time().'.'.$gambar->getClientOriginalExtension();
            $path = public_path('/uploads/gallery');
            $gambar>move($path, $nama);
            $gallery->gambar = $nama;
        }
        $gallery->update();        

        return redirect()->route('gallery');
    }


    public function galleryDestroy($id){
        $paket = Gallery::find($id);
        return redirect()->route('gallery');  
    }
    public function galleryCreate(){
        return view('pages.gallery.create');
    }

    public function galleryStore(Request $request){
        $gambar = $request->file('gambar');
        $nama = time().'.'.$gambar->getClientOriginalExtension();
        $path = public_path('/uploads/gallery');
        $gambar->move($path, $nama);

        $gallery = new Gallery();
        $gallery->nama = $request->nama;
        $gallery->gambar = $nama;
        $gallery->save();

        return redirect()->route('gallery');
    }


    public function paket()
    {
        $paket = Paket::where('status', '1')->get();
        return view('pages.paket.paket', compact('paket'));
    }

    public function paketCreate(){
        return view('pages.paket.create');
    }

    public function paketStore(Request $request){
        $foto = $request->file('gambar');
        $nama = time().'.'.$foto->getClientOriginalExtension();
        $path = public_path('/uploads/paket');
        $foto->move($path, $nama);

        $paket = new Paket();
        $paket->nama_paket = $request->nama;
        $paket->gambar = $nama;
        $paket->save();

        return redirect()->route('paket');
    }

    public function paketEdit($id){
        $paket = Paket::find($id);
        return view('pages.paket.edit', compact('paket'));
    }

    public function paketUpdate($id, Request $request){

        $paket = Paket::find($id);
        $paket->nama_paket = $request->nama;
        $foto = $request->file('gambar');
        if ($foto == '') {
            $paket->gambar = $request->old_gambar;
        }else{
            $nama = time().'.'.$foto->getClientOriginalExtension();
            $path = public_path('/uploads/paket');
            $foto->move($path, $nama);
            $paket->gambar = $nama;
        }
        $paket->update();        

        return redirect()->route('paket');
    }


    public function paketDestroy($id){
        $paket = Paket::find($id);
        $paket->update(['status' => '0']); 

        return redirect()->route('paket');  
    }

    public function about()
    {
        return view('pages.about');
    }

    public function pesan()
    {
        return view('pages.pesan');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
