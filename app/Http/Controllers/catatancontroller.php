<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use Illuminate\Http\Request;


class catatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $lihat = catatan::all();
        return view('home',compact('lihat'));
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
        catatan::create([
            'judul' => $request -> judul,
            'isi' => $request -> isi
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = catatan::findOrFail($id);
        return view('detail',compact('item'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $edit = catatan::find($id);
        return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        catatan::where('id', $request->id)->update([
            'judul' => $request -> judul,
            'isi' => $request -> isi
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = catatan::find($id);
        $hapus->delete();
        return redirect('/');
    }
}
