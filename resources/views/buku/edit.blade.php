@extends('layouts.app')

@section('title')
	Edit Buku
@endsection

@section('content')
	<form action="{{ url('buku/update', $buku->id) }}" method="POST">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">

		<label>Nama Buku</label>
		<input type="text" name="nama_buku" value="{{$buku->nama_buku}}">

		@error('nama_buku')
			<br>
			{{$message  }}
		@enderror
		<br><br>
		<label>Deskripsi Buku</label>
		<textarea name="deskripsi_buku" rows="6" cols="50">
			{{$buku->deskripsi_buku}}
		</textarea>
		
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