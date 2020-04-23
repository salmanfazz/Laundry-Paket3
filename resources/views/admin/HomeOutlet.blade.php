@extends('layout.app')
@section('content')
		<title>Xpress Laundry || Data Oulet</title>
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
	<h1 class="mt-4">Data Oulet</h1>
		<a href="{{url ('admin/outlet/tambahOutlet') }}" class="btn btn-success">Tambah</a>
		<br><br>
		<div id="container">
			<table id="datatable" class="table table-striped table-bordered autoWidth" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th scope="th-sm">Id</th>
						<th scope="th-sm">Nama</th>
						<th scope="th-sm">Alamat</th>
						<th scope="th-sm">Telp</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				@foreach($outlet as $row)
				<tbody>
					<tr>
						<td>{{$row->id_outlet}}</td>
						<td>{{$row->nama_outlet}}</td>
						<td>{{$row->alamat}}</td>
						<td>{{$row->tlp}}</td>
						<td colspan="2">
							<center>
							<a class="btn btn-warning" href="{{url('admin/outlet/editOutlet/'.$row->id_outlet)}}">Edit</a>
							<a class="btn btn-danger" href="{{url('admin/delete/outlet'.$row->id_outlet)}}">Delete</a>
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
						<th scope="th-sm">Telp</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</tfoot>
			</table>
		</div>
@endsection