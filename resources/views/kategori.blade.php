@extends('master2')
@section('judulhalaman','Data kategori')

@section('konten')
	<h3>Pilih Kategori</h3>
    <br>
    <form action="/combo/request">
		<select class="form-select" id="kategori" name="kategori">
		@foreach($kategori as $k)
		<option value={{ $k->ID}}>{{$k->Nama}}</option>
		@endforeach
        </select>
        <input type="submit" value="KIRIM" class="btn btn-primary">
    </form>

@endsection
