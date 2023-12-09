@extends('master2')
@section('judulhalaman','Data Tumbuhan')

@section('konten')

	<h3>Edit Tumbuhan</h3>

	<a href="/tumbuhan"> Kembali</a>

	<br/>
	<br/>

	@foreach($tumbuhan as $p)
        <form action="/tumbuhan/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="kode" value="{{ $p->kodetumbuhan }}">
            <div class="row mb-2">
                <div class="col-sm-3">Kode Tumbuhan</div>
                <div class="col-sm-5">
                    <div> {{ $p->kodetumbuhan }} </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Tumbuhan</label>
                <div class="col-sm-5">
                    <input type="text" required="required" class="form-control" name="nama" value="{{ $p->namatumbuhan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Tumbuhan</label>
                <div class="col-sm-5">
                    <input type="text" required="required" class="form-control" name="jumlah" value="{{ $p->jumlahtumbuhan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-sm-3 col-form-label">Tersedia</label>
                <div class="col-sm-5">
                    <input type="text" required="required" class="form-control" name="tersedia" value="{{ $p->tersedia }}">
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>

	@endforeach

@endsection
