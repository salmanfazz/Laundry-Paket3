@extends('layout.app')
@section('content')
<title>Xpress Laundry || Tambah Paket</title>
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
	<form action="{{url('admin/paket')}}" method="post">
        @csrf
    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Paket</h1>
                </div>
                <div class="card-body">
                    <div class="form-group" type="hidden">
                        <input class="" type="hidden" name="id_paket" id="id_paket">
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
                        <div class="dropdown mr-1">
                              <label for="id_member">Jenis
                                <select class="form-control" name="jenis" id="jenis">
                                    <option value="">Pilih Jenis Paket</option>
                                    <option value="kiloan">Kiloan</option>
                                    <option value="selimut">Selimut</option>
                                    <option value="bed_cover">Bed Cover</option>
                                    <option value="kaos">Kaos</option>
                                    <option value="lain">Lainnya</option>
                                </select>
                              </label>
                        </div>
                    </div>
					<div class="d-flex">
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input class="form-control" type="text" name="nama_paket" id="nama_paket">
                        </div>
                    </div>
					<div class="d-flex">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input class="form-control" type="text" name="harga" id="harga">
                        </div>
                    </div>
                <div>
					@csrf
					<button class="btn btn-primary mt-2" type="submit">Submit</button>
		</form>
					<button class="btn btn-secondary mt-2" href="{{url('admin/paket/HomePaket')}}">Back</button>
                </div>
        </div>    
        </div>
    </div>

@endsection