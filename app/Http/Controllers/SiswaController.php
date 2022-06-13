<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function tentang(){
		return view('tentang');
	}
 
	public function kontak(){
		return view('kontak');
	}

    public function index(){
        $siswa = Siswa::all();
        return view('home', compact('siswa'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);
        return redirect('/home');
    }

    public function edit($id){
        $siswa = DB::table('siswa')->where('id', $id)->get();
        return view('edit', ['siswa' => $siswa]);
    }

    public function update(Request $request){
        DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);
        return redirect('/home');
    }

    public function hapus($id){
        DB::table('siswa')->where('id', $id)->delete();
        return redirect('/home');
    }
}
