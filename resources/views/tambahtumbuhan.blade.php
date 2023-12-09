@extends('master2')
@section('judulhalaman','Data Tumbuhan')

@section('konten')

	<h3>Data Tumbuhan</h3>

	<a href="/tumbuhan"> Kembali</a>

	<br/>
	<br/>

	<form action="/tumbuhan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group row">
            <label for="kode" class="col-sm-3 col-form-label">Kode Tumbuhan</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="kode" name="kode">
            </div>
        </div> --}}

        <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama Tumbuhan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Tumbuhan</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-sm-3 col-form-label">Tersedia</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
