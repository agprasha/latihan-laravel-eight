@extends('layouts.app')

@section('title')
	Detail Buku {{$buku->nama_buku}}

@endsection

@section('content')
	<h2>{{$buku->nama_buku}}</h2>
	<p style="text-align: justify;">{{$buku->deskripsi_buku}}</p>
	<hr>
	<a href="{{url('buku/')}}" title="">Kembali</a>
@endsection