<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$dataProduk = [
    		'Kipas Angin',
    		'Kulkas',
    		'Strika',
    		'Laptop'
    	];

    	return view('coba', compact('dataProduk'));
    }

    public function detail($nama)
    {
    	
    	return view('detail', compact('nama'));
    }
}
