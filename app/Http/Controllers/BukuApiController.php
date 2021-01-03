<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuApiController extends Controller
{
    public function index()
    {
    	$buku = Buku::all();

    	if (!empty($buku)) {
    		return response()->json(['code' => 200, 'success' => true, 'data' => $buku]);
    	}else{
    		return response()->json(['code' => 404, 'success' => false, 'message' => 'Data Not Found']);
    	}
    	
    }

    public function store(Request $request)
    {
    	$buku = new Buku();
    	$buku->nama_buku = $request->nama_buku;
    	$buku->deskripsi_buku = $request->deskripsi_buku;
    	$buku->save();

    	return response()->json(['code' => 201, 'success' => true, 'message' => 'Berhasil Menambah data buku', 'data' => $buku]);
    }

    public function detail($id)
    {
        $buku = Buku::where('id', $id)->first();

        if (!empty($buku)) {
        	return response()->json(['code' => 200, 'success' => true, 'data' => $buku]);
        }else{
        	return response()->json(['code' => 404, 'success' => false, 'message' => 'Data buku tidak ditemukan']);
    	}
    }

    public function update(Request $request, $id)
    {
    	$buku = Buku::find($id);

    	if (!empty($buku)) {
    		$buku->nama_buku = $request->nama_buku;
	        $buku->deskripsi_buku = $request->deskripsi_buku;
	        $buku->save();

	        return response()->json(['code' => 201, 'success' => true, 'message' => 'Berhasil memperbarui data buku', 'data' => $buku]);

    	}else{
    		return response()->json(['code' => 404, 'success' => false, 'message' => 'Data buku tidak ditemukan']);
    	}
        
    }


    public function delete($id)
    {
    	$buku = Buku::find($id);

    	if (!empty($buku)) {
    		$buku->delete();
    		return response()->json(['code' => 200, 'success' =>true, 'message' => 'Berhasil menghapus data buku']);
    	}else{
    		return response()->json(['code' => 404, 'success' => false, 'message' => 'Data buku tidak ditemukan, gagal menghapus data buku']);
    	}
    }

        
}
