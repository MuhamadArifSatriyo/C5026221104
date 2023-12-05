@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
<div class="row">
<div class="col-lg-6"></div>
<div class="col-lg-6">
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>


    <br>
    <br>

	@foreach($pegawai as $p)
        {{ csrf_field() }}
        <span type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="row mb-2">
                <div class="col-sm-2">Nama :</div>
                <div class="col-sm-6">
                    <div class="border border-secondary p-1 pl-2 rounded" > {{ $p->pegawai_nama }} </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-2">Jabatan :</div>
                <div class="col-sm-6">
                    <div class="border border-secondary p-1 pl-2 rounded" > {{ $p->pegawai_jabatan }} </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-2">Umur :</div>
                <div class="col-sm-6">
                    <div class="border border-secondary p-1 pl-2 rounded" > {{ $p->pegawai_umur }} </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-2">Alamat :</div>
                <div class="col-sm-6">
                    <div class="border border-secondary p-1 pl-2 rounded" > {{ $p->pegawai_alamat }} </div>
                </div>
            </div>
            <br>
            <a href="/pegawai" class="btn btn-success"> Kembali</a>
    </div>
</div>
	@endforeach

@endsection
