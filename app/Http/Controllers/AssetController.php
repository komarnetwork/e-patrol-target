<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      //
      return view('pages.asset.index', [
         'assets' => Asset::all()
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
      // return view('layouts.modal');
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
      $validatedData = $request->validate([
         'nama_asset' => 'required',
         'lokasi_point' => 'required',
         'deskripsi' => 'required',
         'jenis_asset' => 'required'
      ]);

      // Asset::create($validatedData);
      dd($validatedData);

      if ($validatedData) {
         # code...
         return redirect()->route('asset.index')->with('success', 'Asset Berhasil Dibuat!' . ' ' . $request->nama_asset);
      } else {
         return redirect()->route('asset.index')->with('error', 'Asset Gagal Dibuat!');
         # code...
      }
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Asset  $asset
    * @return \Illuminate\Http\Response
    */
   public function show(Asset $asset)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Asset  $asset
    * @return \Illuminate\Http\Response
    */
   public function edit(Asset $asset)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Asset  $asset
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Asset $asset)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Asset  $asset
    * @return \Illuminate\Http\Response
    */
   public function destroy(Asset $asset)
   {
      //
   }
}
