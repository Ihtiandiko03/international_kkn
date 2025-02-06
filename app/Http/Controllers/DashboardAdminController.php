<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardAdminController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }
    
    public function icons(){
        return view('dashboard.icons');
    }
    
    public function map(){
        return view('dashboard.map');
    }

    public function notifications(){
        return view('dashboard.notifications');
    }
    public function tables(){
        return view('dashboard.tables');
    }
    public function typography(){
        return view('dashboard.typography');
    }
    public function upgrade(){
        return view('dashboard.upgrade');
    }
    public function user(){
        return view('dashboard.user');
    }


    public function pengumuman(){
        $pengumuman = Pengumuman::where('is_deleted', 0)->get();


        // dd($pengumuman);
        return view('dashboard.pengumuman', compact('pengumuman'));
    }

    public function createPengumuman(){
        return view('dashboard.createpengumuman');
    }

    public function storePengumuman(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'isipengumuman' => 'required',
            'image' => 'nullable|image',
        ]);

        $pengumuman = new Pengumuman;
        $pengumuman->title = $request->title;
        $pengumuman->slug = Str::slug($request->title);
        $pengumuman->body = $request->isipengumuman;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pengumuman', 'public');
            $pengumuman->image = $imagePath;
        } else {
            $pengumuman->image = null;
        }

        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman created successfully!');
    }

    public function showPengumuman($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('dashboard.pengumuman.show', compact('pengumuman'));
    }

    public function editPengumuman($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        // dd($pengumuman->title);
        return view('dashboard.editpengumuman', compact('pengumuman'));
    }

    public function updatePengumuman(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'isipengumuman' => 'required',
            'image' => 'nullable|image',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->title = $request->title;
        $pengumuman->slug = Str::slug($request->title);
        $pengumuman->body = $request->isipengumuman;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $pengumuman->image = $imagePath;
        }

        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman updated successfully!');
    }

    public function deletePengumuman($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->is_deleted = 1;
        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman deleted successfully!');
    }

    public function pendaftarKKN(){
        $pendaftar = User::all();

        return view('dashboard.pendaftarkkn', compact('pendaftar'));
    }
}
