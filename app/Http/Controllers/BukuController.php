<?php

namespace App\Http\Controllers;

use App\Http\Requests\BukuStoreRequest;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BukuController extends Controller
{
    public function index()
    {
    	$buku = Buku::all();

    	return view('buku.index', compact('buku'));
    }

    public function tambah()
    {
        return view('buku.tambah');
    }

    public function store(BukuStoreRequest $request)
    {
    	$buku = new Buku();
    	$buku->nama_buku = $request->nama_buku;
    	$buku->deskripsi_buku = $request->deskripsi_buku;
    	$buku->save();

    	return redirect('buku');
    }

    public function detail($id)
    {
        $buku = Buku::where('id', $id)->firstOrFail();

        // dd($buku);
        return view('buku.detail', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(BukuStoreRequest $request,$id)
    {
        $buku = Buku::findOrFail($id);
        $buku->nama_buku = $request->nama_buku;
        $buku->deskripsi_buku = $request->deskripsi_buku;
        $buku->save();

        return redirect('/buku');
    }

    public function delete($id)
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();

        return redirect()->back();
    }
}
