<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
    	if (!Session::get('login')) {
            return redirect('/');
        }else{
            if (Session::get('role') == 'admin') {
                return view('admin.home');
            } elseif(Session::get('role') == 'kasir') {
                return redirect('kasir/home');
            } elseif(Session::get('role') == 'owner') {
                return redirect('owner/home');
        
            }
    }
}    

    public function viewPelanggan()
    {
        $data['member']= \App\Member::get();
        return view('admin.HomeMember', $data); 
    }

    public function viewTambahPelanggan()

    {  
        return view('admin.tambahPelanggan');
    }

    public function tambahPelangganPost( Request $request )
    {
        $this->validate($request, [
            'nama_member'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'telp'=>'required'
        ]);
   
        $data = new \App\Member;
        $data->nama_member = $request->nama_member;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->telp = $request->telp;
        
        $status = $data->save();

        if ($status){
            
            return redirect('admin/member/HomeMember')->with('success', 'Data Berhasil Ditambah');

        } else {

            return redirect('admin/member/tambahPelanggan')->with('error', 'Data Gagal Ditambah');

        }

    }


    public function viewEditPelanggan( Request $request,$id )
    {
        $data['member'] = \App\Member::find($id);
        return view('admin.editPelanggan', $data);
    }


    public function editPelanggan( Request $request, $id)
    {
        $this->validate($request, [
            'nama_member'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'telp'=>'required'
        ]);

        $data = \App\Member::find( $id );
        $data->nama_member = $request->nama_member;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->telp = $request->telp;
        
        $status = $data->update();

        if ($status){
            
            return redirect('admin/member/HomeMember')->with('success', 'Data Berhasil Diubah');

        } else {

            return redirect('admin/member/editPelanggan')->with('error', 'Data Gagal Diubah');

        }
    }


    public function deletePelangganPost( $id_member )
    {
        $data = \App\Member::find($id_member);

        $status = $data->delete();

        return redirect('admin/member/HomeMember')->with('success', 'Data Berhasil Dihapus');

            
    }


    public function viewOutlet()
    {
        $data['outlet']= \App\Outlet::get();
        return view ('admin.HomeOutlet', $data);
    }


    public function viewtambahOutlet()
    {
        return view('admin.tambahOutlet');
    }



    public function tambahOutlet(Request $request)
    {
        $this->validate($request, [
            'nama_outlet'=>'required',
            'alamat'=>'required',
            'tlp'=>'required'
        ]);
   
        $data = new \App\Outlet;
        $data->nama_outlet = $request->nama_outlet;
        $data->alamat = $request->alamat;
        $data->tlp = $request->tlp;
        
        $status = $data->save();

        if ($status){
            
            return redirect('admin/outlet/HomeOutlet')->with('success', 'Data Berhasil Ditambah');

        } else {

            return redirect('admin/outlet/tambahOutlet')->with('error', 'Data Gagal Ditambah');

        }

    }


    public function viewEditOutlet(Request $request, $id_outlet)
    {
        $data['outlet']=  \App\Outlet::find($id_outlet);
        return view ('admin.editOutlet', $data);
    }


    public function editOutlet(Request $request, $id_outlet)
    {
        $this->validate($request, [
            'nama_outlet'=>'required',
            'alamat'=>'required',
            'tlp'=>'required'
        ]);

        $data = \App\Outlet::find($id_outlet);
        $data->nama_outlet = $request->nama_outlet;
        $data->alamat = $request->alamat;
        $data->tlp = $request->tlp;
        
        $status = $data->update();

        if ($status){
            
            return redirect('admin/outlet/HomeOutlet')->with('success', 'Data Berhasil Diubah');

        } else {

            return redirect('admin/outlet/editOutlet')->with('error', 'Data Gagal Diubah');

        }
    }


    public function deleteOutlet( $id_outlet )
    {
        $data = \App\Outlet::find($id_outlet);

        $status = $data->delete();

        return redirect('admin/outlet/HomeOutlet')->with('success', 'Data Berhasil Dihapus');

            
    }


    public function viewPaket()
    {
        $data['paket']= \App\Paket::get();
        return view('admin.HomePaket', $data);
    }

    public function viewtambahPaket(Request $request)
    {
        $data['outlet']= \App\Outlet::get();
        return view('admin.tambahPaket', $data);
    }

    public function tambahPaket(Request $request)
    {
        $this->validate($request, [
            'id_outlet'=>'required',
            'jenis'=>'required',
            'nama_paket'=>'required',
            'harga'=>'required'
        ]);
   
        $data = new \App\Paket;
        $data->id_outlet = $request->id_outlet;
        $data->jenis = $request->jenis;
        $data->nama_paket = $request->nama_paket;
        $data->harga = $request->harga;
        
        $status = $data->save();

        if ($status){
            
            return redirect('admin/paket/HomePaket')->with('success', 'Data Berhasil Ditambah');

        } else {

            return redirect('admin/paket/tambahPaket')->with('success', 'Data Gagal Dihapus');

        }
    }

    public function viewEditPaket(Request $request, $id_paket)
    {
        $data['paket']= \App\Paket::find($id_paket);
        $data['outlet']= \App\Outlet::get();
        return view('admin.editPaket', $data);
    }

    public function editPaket(Request $request, $id_paket)
    {
        $this->validate($request, [
            'id_outlet'=>'required',
            'jenis'=>'required',
            'nama_paket'=>'required',
            'harga'=>'required'
        ]);

        $data = \App\Paket::find( $id_paket );
        $data->id_outlet = $request->id_outlet;
        $data->jenis = $request->jenis;
        $data->nama_paket = $request->nama_paket;
        $data->harga = $request->harga;
        
        $status = $data->update();

        if ($status){
            
            return redirect('admin/paket/HomePaket')->with('success', 'Data Berhasil Diubah');

        } else {

            return redirect('admin/paket/editPaket')->with('success', 'Data Gagal Diubah');

        }
    }

    public function deletePaket($id_paket)
    {
        $data = \App\Paket::find($id_paket);

        $status = $data->delete(); 
        
        return redirect('admin/paket/HomePaket')->with('success', 'Data Berhasil Dihapus');
    }

    public function viewTransaksi()
    {
        $data['transaksi']= \App\Transaksi::get();
        return view('admin.HomeTransaksi', $data);
    }

    public function viewtambahTransaksi(Request $request)
    {
        $data['outlet']= \App\Outlet::get();
        $data['users']= \App\Users::get();
        $data['member']= \App\Member::get();
        $data['paket']= \App\Paket::get();
        return view('admin.tambahTransaksi', $data);
    }

    public function tambahTransaksi(Request $request)
    {
        $this->validate($request, [
            'id_outlet'=>'required',
            'kode_invoice'=>'required',
            'id_member'=>'required',
            'id_user'=>'required',
            'id_paket'=>'required',
            'tanggal'=>'required',
            'status'=>'required',
            'total_bayar'=>'required',
            'status_bayar'=>'required',
        ]);
   
        $data = new \App\Transaksi;
        $data->id_outlet = $request->id_outlet;
        $data->kode_invoice = $request->kode_invoice;
        $data->id_member = $request->id_member;
		$data->id_user = $request->id_user;
		$data->id_paket = $request->id_user;
        $date = date ("Y-m-d");
        $data->tanggal = $date; 
		$data->status = $request->status;
		$data->total_bayar = $request->total_bayar;
		$data->status_bayar = $request->status_bayar;
        
        $status = $data->save();

        if ($status){
            
            return redirect('admin/transaksi/HomeTransaksi')->with('success', 'Data Berhasil Ditambah');

        } else {

            return redirect('admin/transaksi/HomeTransaksi')->with('error', 'Data Gagal Ditambah');

        }
    }

    public function deleteTransaksi($id_transaksi)
    {
        $data = \App\Transaksi::find($id_transaksi);

        $status = $data->delete();

        return redirect('admin/transaksi/HomeTransaksi')->with('success', 'Data Berhasil Dihapus');
    }

}
