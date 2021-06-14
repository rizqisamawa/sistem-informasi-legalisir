<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/dashboard');
        }
        return redirect('/login')->with('notif','Akun Tidak Terdaftar di Sistem Kami');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function tmakun(Request $request)
    {
        if($request->has('cari')){
            $user = \App\user::where('name','LIKE','%' .$request->cari. '%')->get();
        }else{
            $user = \App\user::All();
        }

        return view('Main.takun',['user'=>$user]);
    }

    public function postakun(Request $request)
    {
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect('/takun')->with('notif','Pembuatan akun berhasil...!!!');;
    }

    public function hapus($id)
    {
        $user = \App\user::find($id);
        $user->delete($user);
        return redirect('/takun')->with('notif','Akun Berhasil Dihapus');
    }
}
