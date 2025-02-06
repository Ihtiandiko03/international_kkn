<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function struktur(){
        return view('struktur');
    }
    public function about(){
        return view('about');
    }
    public function registration(){
        return view('registration');
    }
    public function registration_store(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            // 'password' => 'required|min:8',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'kampus_asal' => 'required',
            'fakultas_asal' => 'required',
            'prodi_asal' => 'required',
            'semester' => 'required',
            'ipk' => 'required',
            'sertif_inggris' => 'required',
            'negara_asal' => 'required',
            'alasan' => 'required',
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->password = '12345';
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->no_hp = $request->no_hp;
        $user->kampus_asal = $request->kampus_asal;
        $user->fakultas_asal = $request->fakultas_asal;
        $user->prodi_asal = $request->prodi_asal;
        $user->semester = $request->semester;
        $user->ipk = $request->ipk;
        $user->sertif_inggris = $request->sertif_inggris;
        $user->negara_asal = $request->negara_asal;
        $user->alasan = $request->alasan;
        $user->save();

        return redirect()->route('main.index')->with('success', 'Registration successful!');
    }

    public function login(){
        return view('login');
    }

    public function pengumuman(){
        $pengumuman = Pengumuman::where('is_deleted', 0)->get();
        return view('pengumuman', compact('pengumuman'));
    }
}
