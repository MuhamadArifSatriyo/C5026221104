@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')


	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-1 col-form-label">NRP</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-1 col-form-label">NilaiAngka</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-sm-1 col-form-label">SKS</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="SKS" name="SKS">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</body>

@endsection
