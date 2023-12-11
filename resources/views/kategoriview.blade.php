@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
<div class="row">
<div class="col-lg-6">
	@foreach($kategori as $p)

            Anda telah memilih Kategori
                <div class="col-sm-6">dengan Kode :{{ $p->ID }}</div>
    </div>
</div>
	@endforeach

@endsection
