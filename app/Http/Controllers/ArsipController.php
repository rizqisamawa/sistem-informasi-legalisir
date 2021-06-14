<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\ArsipExport;
use Maatwebsite\Excel\Facades\Excel;
use App\arsip;
use App\konfirmasi;

class ArsipController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function persyaratan()
    {
        return view('persyaratan');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function data(Request $request)
    {
        if($request->has('cari')){
            $arsip = \App\arsip::where('nama','LIKE','%' .$request->cari. '%')->get();
        }else{
            $arsip = \App\arsip::All();
        }
        
        return view('Main.data',['arsip'=>$arsip]);
    }

    public function tambah(Request $request)
    {   
        $arsip = new arsip;
            $arsip->nama = $request->nama;
            $arsip->jenis = $request->jenis;
            $arsip->ns = $request->ns;
            $arsip->keperluan = $request->keperluan;
            $arsip->alamat = $request->alamat;
            $arsip->tanggal = $request->tanggal;
            $arsip->nohp = $request->nohp;
        $arsip->save();

        return redirect('/data')->with('notif','Data Berhasil Ditambahkan');
    }
    
    public function tganti($id)
    {
        $arsip = \App\arsip::find($id);
        return view('Main.tganti',['arsip'=>$arsip]);
    }

    public function ganti(Request $request,$id)
    {
        $arsip = \App\arsip::find($id);
        $arsip->update($request->all());
        return redirect('/data')->with('notif','Data Berhasil Diubah');
    }

    public function hapus($id)
    {
        $arsip = \App\arsip::find($id);
        $arsip->delete($arsip);
        return redirect('/data')->with('notif','Data Berhasil Dihapus');
    }

    public function export()
    {
	    return Excel::download(new ArsipExport, 'Arsip.xlsx');
    }

    public function konfirmasi(Request $request)
    {
        if($request->has('cari')){
            $konfirmasi = \App\konfirmasi::where('namap','LIKE','%' .$request->cari. '%')->get();
        }else{
            $konfirmasi = \App\konfirmasi::All();
        }        
        return view('Main.konfirmasi',['konfirmasi'=>$konfirmasi]);
    }

    public function skonfirmasi($id)
    {
        $konfirmasi = \App\konfirmasi::find($id);
        return view('Main.skonfirmasi',['konfirmasi'=>$konfirmasi]);
    }

    public function fkonfirmasi(Request $request,$id)
    {
        $konfirmasi = \App\konfirmasi::find($id);
        $konfirmasi->update($request->all());
        return redirect('/konfirmasi')->with('notif','Konfirmasi Telah Di Selesaikan');
    }

    public function ckonfirmasi()
    {
        $konfirmasi = \App\konfirmasi::All();
        return view('Main.ckonfirmasi',['konfirmasi'=>$konfirmasi]);
    }

    public function tkonfirmasi(Request $request)
    {
        $konfirmasi = new konfirmasi;
            $konfirmasi->namac = $request->namac;
            $konfirmasi->namap = $request->namap;
            $konfirmasi->keterangan = $request->keterangan;
            $konfirmasi->komentar = '';
            $konfirmasi->status = 'PROSES';
        $konfirmasi->save();

        return redirect('/ckonfirmasi')->with('notif','Data Berhasil Ditambahkan');
    }
}