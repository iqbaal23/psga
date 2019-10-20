<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Artikel;
use DB;
use Illuminate\Support\Facades\Session;

class ArtikelController extends Controller
{
    //
    public function index()
    {
        $artikel_list = \App\Artikel::all();
        return view('admin/artikel/index', compact('artikel_list'));
    }

    public function tambahform()
    {
        return view('admin/artikel/tambahform');
    }

    public function store(Artikel $artikel)
    {

        if ($artikel->hasFile('foto')) {
            $foto = $artikel->file('foto');

            $ext = $foto->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $artikel->file('foto')->move('public/foto-artikel/', $name);
            $data = [
                'judul_artikel' => $artikel->input('judul_artikel'),
                'isi' => $artikel->input('isi'),
                'foto' => $name,
                'author' => $artikel->input('author'),
                'tanggal' => $artikel->input('tanggal')
            ];
        } else {
            $foto = $artikel->file('foto');

            $ext = $foto->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $artikel->file('foto')->move('public/foto-artikel/', $name);
            $data = [
                'judul_artikel' => $artikel->input('judul_artikel'),
                'isi' => $artikel->input('isi'),
                'foto' => $name,
                'author' => $artikel->input('author'),
                'tanggal' => $artikel->input('tanggal')
            ];
        }

        DB::table('artikel')->insert($data);
        Session::flash('flash_message', 'Tambah Data Berhasil');
        return redirect('admin/artikel-form');
    }

    public function view($id)
    {
        $data = DB::table('artikel')->where('id', '=', $id)->first();
        return view('admin/artikel/view', compact('data'));
    }
    public function editform($id)
    {
        $data = DB::table('artikel')->where('id', '=', $id)->first();
        return view('admin/artikel/editform', compact('data'));
    }
    public function edit( Artikel $artikel, $id)
    {
        $foto = $artikel->file('foto');

        $ext = $foto->getClientOriginalExtension();
        $name = date('Ymdhis') . "." . $ext;
        $artikel->file('foto')->move('public/foto-artikel/', $name);
        $data = [
            'judul_artikel' => $artikel->input('judul_artikel'),
            'isi' => $artikel->input('isi'),
            'foto' => $name,
            'author' => $artikel->input('author'),
            'tanggal' => $artikel->input('tanggal')
        ];
        DB::table('artikel')->where('id', '=', $id)->update($data);
        Session::flash('flash_message', 'Update Data Berhasil');
        return redirect('admin/artikel-index');
    }
    public function destroy($id)
    {
        DB::table('artikel')->where('id', '=', $id)->delete();
       

        Session::flash('flash_message', 'Hapus Data Berhasil');
        return redirect('admin/artikel-index');
    }
}
