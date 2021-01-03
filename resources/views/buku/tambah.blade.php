@extends('layouts.app')

@section('title')
	Tambah Buku
@endsection

@section('content')
	<form action="{{ url('buku/store') }}" method="POST">
		{{csrf_field()}}

		{{-- @if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif --}}

		<label>Nama Buku</label>
		<input type="text" name="nama_buku" value="{{old('nama_buku')}}">

		@error('nama_buku')
			<br>
			{{$message  }}
		@enderror
		<br><br>
		<label>Deskripsi Buku</label>
		<textarea name="deskripsi_buku" value="{{old('deskripsi_buku')}}"></textarea>
		
		@error('deskripsi_buku')
			<br>
			{{$message  }}
		@enderror
		<br>
		<br>
		<button type="submit">Save</button>
		<a href="{{ url('/buku') }}" title="">Batal</a>
	</form>
@endsection