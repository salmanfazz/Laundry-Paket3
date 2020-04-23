@extends('layout.app')
@section('content')
		<title>Xpress Laundry || Data Paket</title>
	@if(session('success'))
		<div class = "alert alert-success">
	{{ session('success') }}
		</div>
	@endif
	@if(session('error'))
		<div class = "alert alert-error">
	{{ session('error') }}
		</div>
	@endif
	<br>
	<h1 class="mt-4">Data Paket</h1>
		<a href="{{url ('admin/paket/tambahPaket') }}" class="btn btn-success">Tambah</a>
		<br><br>
		<div id="container">
			<table id="datatable" class="table table-striped table-bordered autoWidth" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th scope="th-sm">Id</th>
						<th scope="th-sm">Id Outlet</th>
						<th scope="th-sm">Jenis</th>
						<th scope="th-sm">Nama Paket</th>
						<th scope="th-sm">Harga</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				@foreach($paket as $row)
				<tbody>
					<tr>
						<td>{{$row->id_paket}}</td>
						<td>{{$row->id_outlet}}</td>
						<td>{{$row->jenis}}</td>
						<td>{{$row->nama_paket}}</td>
						<td>{{$row->harga}}</td>
						<td colspan="2">
							<center>
							<a class="btn btn-warning" href="{{url('admin/paket/editPaket/'.$row->id_paket)}}">Edit</a>
							<a class="btn btn-danger" href="{{url('admin/delete/paket'.$row->id_paket)}}">Delete</a>
							</center>
						</td>
					</tr>
				</tbody>
				@endforeach 
				<tfoot>	
					<tr>
						<th scope="th-sm">Id</th>
						<th scope="th-sm">Id Outlet</th>
						<th scope="th-sm">Jenis</th>
						<th scope="th-sm">Nama Paket</th>
						<th scope="th-sm">Harga</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</tfoot>
			</table>
		</div>
@endsection