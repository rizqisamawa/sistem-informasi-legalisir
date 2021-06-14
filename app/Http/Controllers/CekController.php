<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\kk;
use App\anggota;
use App\akta;
use App\ktp;

class CekController extends Controller
{
    // public function dta(Request $request)
    // {
    //     $anggota = \App\anggota::all();
    //     $kk = \App\kk::all();
    //     return view('persyaratan',['anggota'=>$anggota],['kk'=>$kk]);
    // }

    public function ktp(Request $request)
    {
        $cari = $request->cari;
        $ktp = DB::table('ktp')
        ->leftJoin('anggota','ktp.id_ak', '=', 'anggota.id_ak')
        ->where('NIK','like','%' .$cari. '%')
        ->get();

        return view('Check.ktp', ['ktp' => $ktp]);
    }

    public function tktp(Request $request)
    {
        DB::table('ktp')->insert
        ([
            'id_ak' => $request->id_ak,
            'alamat' => $request->alamat,
            'berlaku' => $request->berlaku,
        ]);
        return redirect('/ktp')->with('notif','Pembuatan Kartu Tanda Penduduk Telah Berhasil');
    }

    public function uktp($id)
    {
        $ktp = \App\ktp::find($id);
        return view('Check.ubahktp',['ktp'=>$ktp]);
    }

    public function gktp(Request $request,$id)
    {
        $ktp = \App\ktp::find($id);
        $ktp->update($request->all());
        return redirect('/ktp')->with('notif','Data Kartu Tanda Penduduk Berhasil Diubah');
    }

    public function hktp($id)
    {
        $ktp = \App\ktp::find($id);
        $ktp->delete($ktp);
        return redirect('/ktp')->with('notif','Data Kartu Tanda Penduduk Berhasil Dihapus');
    }
            public function kk(Request $request)
            {
                if($request->has('cari')){
                    $kk = \App\kk::where('no_kk','LIKE','%' .$request->cari. '%')->get();
                }else{
                    $kk = \App\kk::All();
                }

                return view('Check.kk', ['kk' => $kk]);
            }

            public function tkk(Request $request)
            {
                DB::table('kk')->insert
                ([
                    'no_kk' => $request->no_kk,
                    'nama_kk' => $request->nama_kk,
                    'alamat' => $request->alamat,
                    'rtrw' => $request->rtrw,
                    'kodepos' => $request->kodepos,
                    'desa' => $request->desa,
                    'kecamatan' => $request->kecamatan,
                    'kota' => $request->kota,
                    'provinsi' => $request->provinsi,
                ]);
                return redirect('/kk')->with('notif','Pembuatan Kartu Keluarga Telah Berhasil');
            }

            public function dtlkk($id)
            {
                $kk = \App\kk::find($id);
                return view('Check.dtlkk',['kk'=> $kk]);
            }

            public function ukk($id)
            {
                $kk = \App\kk::find($id);
                return view('Check.ubahkk',['kk'=>$kk]);
            }

            public function gkk(Request $request,$id)
            {
                $kk = \App\kk::find($id);
                $kk->update($request->all());
                return redirect('/kk')->with('notif','Data Kartu Keluarga Berhasil Diubah');
            }

            public function hkk($id)
            {
                $kk = \App\kk::find($id);
                $kk->delete($kk);
                return redirect('/kk')->with('notif','Kartu Keluarga Berhasil Dihapus');
            }

    public function akta(Request $request)
    {
        $cari = $request->cari;
        $akta = DB::table('akta')
        ->leftJoin('anggota','akta.id_ak', '=', 'anggota.id_ak')
        ->where('no_akta','like','%' .$cari. '%')
        ->get();
        return view('Check.akta', ['akta' => $akta]);
    }

    public function takta(Request $request)
    {
        DB::table('akta')->insert
        ([
            'id_ak' => $request->id_ak,
            'no_akta' => $request->no_akta,
            'anak_ke' => $request->anak_ke,
        ]);
        return redirect('/akta')->with('notif','Pembuatan Akta Kelahiran Telah Berhasil');
    }

    public function uakta($id)
    {
        $akta = \App\akta::find($id);
        return view('Check.ubahakta',['akta'=>$akta]);
    }

    public function gakta(Request $request,$id)
    {
        $akta = \App\akta::find($id);
        $akta->update($request->all());
        return redirect('/akta')->with('notif','Data Akta Kelahiran Berhasil Diubah');
    }

    public function hakta($id)
    {
        $akta = \App\akta::find($id);
        $akta->delete($akta);
        return redirect('/akta')->with('notif','Data Akta Kelahiran Berhasil Dihapus');
    }

            public function penduduk(Request $request)
            {
                if($request->has('cari')){
                    $anggota = \App\anggota::where('nama','LIKE','%' .$request->cari. '%')->get();
                }else{
                    $anggota = \App\anggota::All();
                }

                return view('Check.penduduk', ['anggota' => $anggota]);
            }

            public function tpenduduk(Request $request)
            {
                DB::table('anggota')->insert
                ([
                    'id_ak' => $request->id_ak,
                    'kk_id' => $request->kk_id,
                    'NIK' => $request->NIK,
                    'nama' => $request->nama,
                    'kelamin' => $request->kelamin,
                    'ttl' => $request->ttl,
                    'agama' => $request->agama,
                    'pendidikan' => $request->pendidikan,
                    'pekerjaan' => $request->pekerjaan,
                    'goldarah' => $request->goldarah,
                    'stskawin' => $request->stskawin,
                    'tglkawin' => $request->tglkawin,
                    'stskeluarga' => $request->stskeluarga,
                    'warga' => $request->warga,
                    'ayah' => $request->ayah,
                    'ibu' => $request->ibu,
                ]);
                return redirect('/penduduk')->with('notif','Pembuatan Data Penduduk Telah Berhasil');
            }

            public function upenduduk($id)
            {
                $anggota = \App\anggota::find($id);
                return view('Check.ubahpenduduk',['anggota'=>$anggota]);
            }

            public function gpenduduk(Request $request,$id)
            {
                $anggota = \App\anggota::find($id);
                $anggota->update($request->all());
                return redirect('/penduduk')->with('notif','Data Penduduk Berhasil Diubah');
            }

            public function hpenduduk($id)
            {
                $anggota = \App\anggota::find($id);
                $anggota->delete($anggota);
                return redirect('/penduduk')->with('notif','Data Penduduk Berhasil Dihapus');
            }
}
