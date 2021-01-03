@extends('layouts.app')

@section('title')
	List Buku
@endsection

@section('content')
	@can('buku.tambah')
		<a href="{{ route('buku.tambah') }}" title="">Tambah Buku</a>
	@endcan
	
	<ol>
		@foreach ($buku as $value)
			<li>
				Nama Buku: {{$value->nama_buku}} 
				<br>
				Deskripsi Buku: {{$value->deskripsi_buku}}
				<br>
				<br>
				@can('buku.detail')
					<a href="{{url('buku/detail', $value->id)}}" title="">Detail</a>
				@endcan

				@can('buku.edit')
				<a href="{{url('buku/edit', $value->id)}}" title="">Edit</a>
				@endcan

				@can('buku.delete')
				<form action="{{url('buku/delete', $value->id)}}" method="POST">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
					<input type="submit" value="Delete">
				</form>
				@endcan

				{{-- <a href="{{url('buku/delete', $value->id)}}" title="">Delete</a> --}}
				<hr>
			</li>

		@endforeach
	</ol>
@endsection