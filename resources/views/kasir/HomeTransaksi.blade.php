@extends('layout.kasir')
@section('content')
		<title>Xpress Laundry || Data Transaksi</title>
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
	<h1 class="mt-4">Data Transaksi</h1>
		<a href="{{ url('kasir/transaksi/tambahTransaksi') }}" class="btn btn-success">Tambah</a>
		<br><br>
		<div id="container">
			<table id="datatable" class="table table-striped table-bordered autoWidth" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th scope="th-sm">ID Transaksi</th>
						<th scope="th-sm">ID Outlet</th>
						<th scope="th-sm">Kode Invoice</th>
						<th scope="th-sm">ID Member</th>
						<th scope="th-sm">ID User</th>
						<th scope="th-sm">ID Paket</th>
						<th scope="th-sm">Tanggal</th>
						<th scope="th-sm">Status</th>
						<th scope="th-sm">Total Bayar</th>
						<th scope="th-sm">Status Bayar</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				@foreach($transaksi as $row)
				<tbody>
					<tr>
						<td>{{$row->id_transaksi}}</td>
						<td>{{$row->id_outlet}}</td>
						<td>{{$row->kode_invoice}}</td>
						<td>{{$row->id_member}}</td>
						<td>{{$row->id_user}}</td>
						<td>{{$row->id_paket}}</td>
						<td>{{$row->tanggal}}</td>
						<td>{{$row->status}}</td>
						<td>{{$row->total_bayar}}</td>
						<td>{{$row->status_bayar}}</td>
						<td>
							<center><button class = "btn btn-danger" href="{{url('kasir/delete/transaksi'.$row->id_transaksi)}}">Delete</button></center>
						</td>
					</tr>
				</tbody>
				@endforeach 
				<tfoot>	
					<tr>
						<th scope="th-sm">ID Transaksi</th>
						<th scope="th-sm">ID Outlet</th>
						<th scope="th-sm">Kode Invoice</th>
						<th scope="th-sm">ID Member</th>
						<th scope="th-sm">ID User</th>
						<th scope="th-sm">ID Paket</th>
						<th scope="th-sm">Tanggal</th>
						<th scope="th-sm">Status</th>
						<th scope="th-sm">Total Bayar</th>
						<th scope="th-sm">Status Bayar</th>
						<th class="th-sm" colspan="2"><center>Action</center></th>
					</tr>
				</tfoot>
			</table>
		</div>
@endsection
