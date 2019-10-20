<?php

namespace App\Http\Controllers\Admin;

use App\JenisKegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Phalcon\Mvc\View;
use DB;

class JenisKegiatanController extends Controller
{
    //
    public function index()
    {
        $jenis_kegiatan_list = JenisKegiatan::all();
        return view('admin/jenis-kegiatan/index', compact('jenis_kegiatan_list'));
    }

    public function tambahform()
    {
        return view('admin/jenis-kegiatan/tambahform');
    }

    public function store(\App\Http\Requests\JenisKegiatan $request)
    {
        $data = $request->all();
        JenisKegiatan::create($data);
        Session::flash('flash_message', 'Tambah Data Berhasil');
        // $id = ['1'=>'1','2'=>"2"];
        return redirect('admin/jenis-kegiatan-index');

    }
    public function coba(Request $request){
        var_dump($request);
        exit();
    }

    public function editform($id)
    {
        $data = DB::table('jenis_kegiatan')->where('id', '=', $id)->first();
        return view('admin/jenis-kegiatan/editform', compact('data'));
    }

    public function edit(\App\Http\Requests\JenisKegiatan $jenisKegiatan, $id)
    {
        $data = [
            'nama_kegiatan' => $jenisKegiatan->input('nama_kegiatan'),
            'kategori' => $jenisKegiatan->input('kategori')
        ];
        DB::table('jenis_kegiatan')->where('id', '=', $id)->update($data);
        return redirect('admin/jenis-kegiatan-index');
    }
}
