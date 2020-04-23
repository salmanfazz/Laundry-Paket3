@extends('layout.app')
@section('content')
<title>Xpress Laundry || Edit Pelanggan</title>
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
		<form action="{{url('admin/paket' , @$paket->id_paket)}}" method="post">
        @csrf
        @if(!empty($paket))
            @method('PATCH')
        @endif
    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Edit Paket</h1>
                </div>
			<div class="card-body">
                    <div class="form-group" type="hidden">
                        <input type="hidden" name="id_paket" id="id_paket" value="{{old('id_paket',@$paket->id_paket)}}" readonly />
                    </div>    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_outlet">Outlet
                                <select class="form-control" name="id_outlet" id="id_outlet">
                                    <option value="">Pilih Outlet</option>
									@foreach ($outlet as $row)
									<option value="{{ $row->id_outlet }}" {{ @$paket->id_outlet == $row->id_outlet ? 'selected' : ''}}>{{ $row->nama_outlet }}</option>
									@endforeach
                                </select>
                              </label>
                        </div>
                    </div>
					<div class="d-flex">
                        <div class="form-group">    
                            <label for="nama_paket">Nama Paket</label>
                            <input class="form-control" type="text" name="nama_paket" id="nama_paket" value="{{old('nama_paket',@$paket->nama_paket)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="jenis">Jenis Cucian
                                <select class="form-control" name="jenis" id="jenis">
									<option value="">Pilih Jenis Cucian</option>
									<option value="kiloan" {{ old('jenis', $paket->jenis) == 'kiloan' ? 'selected' : '' }}> Kiloan </option>
									<option value="selimut" {{ old('jenis', $paket->jenis) == 'selimut' ? 'selected' : '' }}> Selimut </option>
									<option value="bed_cover" {{ old('jenis', $paket->jenis) == 'bed_cover' ? 'selected' : '' }}> Bed Cover </option>
									<option value="kaos" {{ old('jenis', $paket->jenis) == 'kaos' ? 'selected' : '' }}> Kaos </option>
									<option value="lain" {{ old('jenis', $paket->jenis) == 'lain' ? 'selected' : '' }}> Lainnya </option>
								</select>
                              </label>
                        </div>
                    </div>
					<div class="d-flex">
                        <div class="form-group">    
                            <label for="harga">Harga</label>
                            <input class="form-control" type="text" name="harga" id="harga" value="{{old('harga',@$paket->harga)}}">
                        </div>
                    </div>
                    <br> 
                <div>
					@csrf
					<button class="btn btn-primary mt-2" type="submit">Submit</button>
		</form>
					<a class="btn btn-secondary mt-2" href="{{url('admin/transaksi/HomePaket')}}">Back</a>
                </div>
			</div>    
        </div>
    </div>

@endsection