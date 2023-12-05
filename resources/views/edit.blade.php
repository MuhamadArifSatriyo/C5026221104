@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="form-group row">
                <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                <div class="col-sm-3">
                    <input type="text" required="required" class="form-control" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
                <div class="col-sm-3">
                    <input type="text" required="required" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="Umur" class="col-sm-1 col-form-label">Umur</label>
                <div class="col-sm-3">
                    <input type="text" required="required" class="form-control" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
                <div class="col-sm-3">
                    <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>

	@endforeach

@endsection
