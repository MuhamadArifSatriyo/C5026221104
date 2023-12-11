@extends('master2')
@section('judulhalaman','Data kategori')

@section('konten')
	<h3>Pilih Kategori</h3>
    <br>
    <form action="/combo/request">
		<select class="form-control" id="kategori" name="kategori">
		@foreach($kategori as $k)
		<option value={{ $k->ID}}>{{$k->Nama}}</option>
		@endforeach
        </select>
        <br>
        <input type="submit" value="KIRIM" class="btn btn-primary">
    </form>

@endsection
