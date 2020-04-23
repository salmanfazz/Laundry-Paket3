@extends('layout.kasir')
@section('content')
		<title>Xpress Laundry || Data Pelanggan</title>
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
	<h1 class="mt-4">Data Pelanggan</h1>
		<a href="{{url ('kasir/member/tambahPelanggan') }}" class="btn btn-success">Tambah</a>
		<br><br>
		<div id="container">
			<table id="datatable" class="table table-striped table-bordered autoWidth" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th scope="th-sm">Id</th>
						<th scope="th-sm">Nama</th>		
						<th scope="th-sm">Alamat</th>
						<th scope="th-sm">Jenis Kelamin</th>
						<th scope="th-sm">Telp</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				@foreach($member as $row)
				<tbody>
					<tr>
						<td>{{$row->id_member}}</td>
						<td>{{$row->nama_member}}</td>
						<td>{{$row->alamat}}</td>
						<td>{{$row->jenis_kelamin}}</td>
						<td>{{$row->telp}}</td>
						<td colspan="2">
							<center>
							<a class = "btn btn-warning" href="{{url ('kasir/member/editPelanggan/'.$row->id_member) }}">Edit</a>
							<a class = "btn btn-danger" href="{{url ('kasir/delete/member'.$row->id_member) }}">Delete</a>
							</center>
						</td>
					</tr>
				</tbody>
				@endforeach 
				<tfoot>	
					<tr>
						<th scope="th-sm">Id</th>
						<th scope="th-sm">Nama</th>		
						<th scope="th-sm">Alamat</th>
						<th scope="th-sm">Jenis Kelamin</th>
						<th scope="th-sm">Telp</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</tfoot>
			</table>
		</div>
@endsection