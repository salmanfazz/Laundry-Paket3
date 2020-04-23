@extends('layout.kasir')
@section('content')
<title>Xpress Laundry || Tambah Pelanggan</title>
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
		<form action="{{url('kasir/member')}}" method="post">
        @csrf
    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Pelanggan</h1>
                </div>
			<div class="card-body">
                    <div class="form-group" type="hidden">
                        <input type="hidden" name="id_member" id="id_member" value="{{old('id_member',@$member->id_member)}}">
                    </div>    
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="nama_member">Nama</label>
                            <input class="form-control" type="text" name="nama_member" id="nama_member">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                        </div>
                    </div>    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="jenis_kelamin">Jenis Kelamin
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin Anda</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                              </label>
                        </div>
                    </div>
                    <br> 
                    <div class="d-flex">
                        <div class="form-group">    
                            <label for="telp">No. Telp</label>
                            <input class="form-control" type="text" name="telp" id="telp">
                        </div>
                    </div>
                <div>
					@csrf
					<button class="btn btn-primary mt-2" type="submit">Submit</button>
		</form>
					<a class="btn btn-secondary mt-2" href="{{url('kasir/member/HomeMember')}}">Back</a>
                </div>
			</div>
        </div>
    </div>

@endsection