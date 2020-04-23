@extends('layout.app')
@section('content')
<title>Xpress Laundry || Tambah Outlet</title>
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
		<form action="{{url('admin/outlet')}}" method="post">
        @csrf
    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Outlet</h1>
                </div>
			<div class="card-body">
                    <div class="form-group" type="hidden">
                        <input type="hidden" name="id_outlet" id="id_outlet" value="{{old('id_outlet',@$outlet->id_outlet)}}">
                    </div>    
                    <div class="d-flex">
                        <div class="form-group"> 
                         <label for="nama_outlet">Nama</label>
                         <input class="form-control" type="text" name="nama_outlet" id="nama_outlet">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                        </div>
                    </div>
                    <div class=d-flex>    
                        <div class="form-group">    
                            <label for="tlp">No. Telp</label>
                            <input class="form-control" type="text" name="tlp" id="tlp">
                        </div>
                     </div>
                <div>
					@csrf
					<button class="btn btn-primary mt-2" type="submit">Submit</button>
		</form>
					<button class="btn btn-secondary mt-2" href="{{url('admin/transaksi/HomeOutlet')}}">Back</button>
                </div>
			</div>    
        </div>
    </div>

@endsection