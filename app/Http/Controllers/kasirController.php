<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class kasirController extends Controller
{
    public function index()
    {
    	if (!Session::get('login')) {
            return redirect('/');
        }else{
            if (Session::get('role') == 'kasir') {
                return redirect('kasir/home');
            } elseif(Session::get('role') == 'kasir') {
            	return view('kasir.home');
            } elseif(Session::get('role') == 'owner') {
                return redirect('owner/home');
            } else{
                return redirect('/');
            }
                
        }
    }

    public function viewPelanggan()
    {
        $data['member']= \App\Member::get();
        return view('kasir.HomeMember', $data); 
    }

    public function viewTambahPelanggan()

    {  
        return view('kasir.tambahPelanggan');
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
            
            return redirect('kasir/member/HomeMember')->with('success', 'Data Berhasil Ditambah');

        } else {

            return redirect('kasir/member/tambahPelanggan')->with('error', 'Data Gagal Ditambah');

        }

    }


    public function viewEditPelanggan( Request $request,$id )
    {
        $data['member'] = \App\Member::find($id);
        return view('kasir.editPelanggan', $data);
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
            
            return redirect('kasir/member/HomeMember')->with('success', 'Data Berhasil Diubah');

        } else {

            return redirect('kasir/member/editPelanggan')->with('error', 'Data Gagal Diubah');

        }
    }


    public function deletePelangganPost( $id_member )
    {
        $data = \App\Member::find($id_member);

        $status = $data->delete();

        return redirect('kasir/member/HomeMember')->with('success', 'Data Berhasil Dihapus');

            
    }
	
	public function viewTransaksi()
    {
        $data['transaksi']= \App\Transaksi::get();
        return view('kasir.HomeTransaksi', $data);
    }

    public function viewtambahTransaksi(Request $request)
    {
        $data['outlet']= \App\Outlet::get();
        $data['users']= \App\Users::get();
        $data['member']= \App\Member::get();
        $data['paket']= \App\Paket::get();
        return view('kasir.tambahTransaksi', $data);
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
            
            return redirect('kasir/transaksi/HomeTransaksi')->with('success', 'Data Berhasil Ditambah');

        } else {

            return redirect('kasir/transaksi/HomeTransaksi')->with('error', 'Data Gagal Ditambah');

        }
    }

    public function deleteTransaksi($id_transaksi)
    {
        $data = \App\Transaksi::find($id_transaksi);

        $status = $data->delete();

        return redirect('kasir/transaksi/HomeTransaksi')->with('success', 'Data Berhasil Dihapus');
    }

}
