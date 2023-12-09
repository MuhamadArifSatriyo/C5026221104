@extends('master2')
@section('judulhalaman','Data Tumbuhan')

@section('konten')
	<h3>Data Tumbuhan</h3>

	<a href="/tumbuhan/tambah" class="btn btn-primary"> + Tambah Tumbuhan Baru</a>

	<br/>
	<br/>

	<table class="table table-stripped table-hover">
		<tr>
			<th>Kode Tumbuhan</th>
			<th>Nama Tumbuhan</th>
			<th>Jumlah Tumbuhan</th>
			<th>Tersedia</th>
		</tr>
		@foreach($tumbuhan as $p)
		<tr>
			<td>{{ $p->kodetumbuhan }}</td>
			<td>{{ $p->namatumbuhan }}</td>
			<td>{{ $p->jumlahtumbuhan }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/tumbuhan/edit/{{ $p->kodetumbuhan }}" class="btn btn-warning">Edit</a>
				|
				<a href="/tumbuhan/hapus/{{ $p->kodetumbuhan }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $tumbuhan->links() }}

@endsection
