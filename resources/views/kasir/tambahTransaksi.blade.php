@extends('layout.kasir')
@section('content')
<title>Xpress Laundry || Tambah Transaksi</title>
<div class="content">
    <!-- Cek -->
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	<form action="{{url('kasir/transaksi')}}" method="post">
        @csrf
    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Transaksi</h1>
                </div>
                <div class="card-body">
                    <div class="form-group" type="hidden">
                        <input class="" type="hidden" name="id_transaksi" id="id_transaksi">
                    </div>    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_outlet">Outlet
                                <select class="form-control" name="id_outlet" id="id_outlet">
                                    <option value="">Pilih Outlet</option>
                                    @foreach($outlet as $o)
                                    <option value="{{$o->id_outlet}}">{{$o->nama_outlet}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="kode_invoice">Kode Invoice</label>
                            <input class="form-control" type="text" name="kode_invoice" id="kode_invoice">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_member">Pelanggan
                                <select class="form-control" name="id_member" id="id_member">
                                    <option value="">Pilih Pelanggan</option>
                                    @foreach($member as $m)
                                    <option value="{{$m->id_member}}">{{$m->nama_member}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
					<div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_user">Petugas
                                <select class="form-control" name="id_user" id="id_user">
                                    <option value="">Pilih Petugas</option>
                                    @foreach($users as $u)
                                    <option value="{{$u->id_user}}">{{$u->nama}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
					<div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_member">Paket
                                <select class="form-control" name="id_paket" id="id_paket">
                                    <option value="">Pilih Paket</option>
                                    @foreach($paket as $p)
                                    <option value="{{$p->id_paket}}">{{$p->nama_paket}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="tanggal">Tanggal</label>
                            <input class="form-control" type="text" name="tanggal" id="tanggal">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="status">Status
                                <select class="form-control" name="status" id="status">
                                    <option value="">Pilih Status Paket</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Proses">Proses</option>
                                    <option value="Diambil">Diambil</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                              </label>
                        </div>
                    </div>
					<div class="d-flex">
                        <div class="form-group"> 
                            <label for="total_bayar">Total Bayar</label>
                            <input class="form-control" type="text" name="total_bayar" id="total_bayar">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="status_bayar">Status Bayar
                                <select class="form-control" name="status_bayar" id="status_bayar">
                                    <option value="">Pilih Status</option>
                                    <option value="Lunas">Dibayar</option>
                                    <option value="Pending">Pending</option>
                                </select>
                              </label>
                        </div>
                    </div>
                <div>
					@csrf
					<button class="btn btn-primary mt-2" type="submit">Submit</button>
		</form>
					<a class="btn btn-secondary mt-2" href="{{url('kasir/member/HomeMmeber')}}">Back</a>
                </div>
        </div>
        </div>
    </div>

@endsection