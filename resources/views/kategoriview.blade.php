@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
<div class="row">
<div class="col-lg-6">
	@foreach($kategori as $p)
            <div class="col-sm"><h2>Anda telah memilih Kategori dengan Kode : {{ $p->ID }}</div>
    </div>
</div>
	@endforeach

@endsection
