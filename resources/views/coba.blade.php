@extends('layouts.app')

@section('title')
	List Produk
@endsection


@section('css')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@endsection

@section('content')
	<h1>List Produk</h1>

	<ol>
		@foreach ($dataProduk as $key => $value)
			<li>{{$value}}</li>
		@endforeach
	</ol>
@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

@endsection