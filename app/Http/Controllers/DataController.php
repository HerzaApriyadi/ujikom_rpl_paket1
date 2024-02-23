<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\books;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function index(){  
        
        $books = books::all();
        return view('buku.index', compact('books'));
    }

    public function create(){

        return view('buku.create');
    }

    public function store(Request $request)
    {
 
        $extension = $request->foto->extension();
        $simpan = $request->judul. '-' . time() . '.' . $extension;
        $request->file('foto')->storeAs('public/cover/', $simpan);
    
        
        $books = books::create([
            'judul'     => $request->judul,
            'penulis'   => $request->penulis,
            'tahun_terbit'   => $request->tahun_terbit,
            'image'     => $simpan,
            
        ]);
    
        if($books){
            Session::flash('success', 'Data Berhasil Di Tambahkan');
            return redirect('/create');
        }else{
            Session::flash('failed', 'Data Gagal Di Tambahkan');
            return redirect('/create');
        }
    }

    public function destroy($id){
        $hapus = books::findOrFail($id)->delete();
        return redirect('/buku');
    }

    public function edit($id){

        $book = books::findOrFail($id);
        return view('buku.edit', compact('book'));
    }

    public function update(Request $request)
    {

        if ($request->has('foto')) {
            $extension = $request->foto->extension();
            $simpan = $request->judul. '-' . time() . '.' . $extension;
            $request->file('foto')->storeAs('public/cover/', $simpan);    
        }else{
            $bukufoto = books::find($request->id);
            $simpan = $bukufoto->image;
        }
        
        $books = books::find($request->id)->update([
            'judul'     => $request->judul,
            'penulis'   => $request->penulis,
            'tahun_terbit'   => $request->tahun_terbit,
            'image'     => $simpan,
        ]);
    
        if($books){
            Session::flash('success', 'Data Berhasil Di update');
            return redirect('/data-buku');
        }else{
            Session::flash('failed', 'Data Gagal Di update');
            return redirect('/data-buku');
        }
        
    }




































































}
