<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Jurnal;
use DB;
use Illuminate\Support\Facades\Session;

class JurnalController extends Controller
{

    public function index()
    {
        $jurnal_list = \App\Jurnal::all();
        return view('admin/jurnal/index', compact('jurnal_list'));
    }

    public function tambahform()
    {
        return view('admin/jurnal/tambahform');
    }

    public function store(\App\Http\Requests\Jurnal $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $ext = $file->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $request->file('file')->move('public/file-jurnal/', $name);
            $data = [
                'judul' => $request->input('judul'),
                'file' => $name,
                'author' => $request->input('author'),
                'tanggal' => $request->input('tanggal')
            ];
        } else {
            $file = $request->file('file');

            $ext = $file->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $request->file('file')->move('public/file-jurnal/', $name);
            $data = [
                'judul' => $request->input('judul'),
                'file' => $name,
                'author' => $request->input('author'),
                'tanggal' => $request->input('tanggal')
            ];
        }

        DB::table('jurnal')->insert($data);
        Session::flash('flash_message', 'Tambah Data Berhasil');
        return redirect('admin/jurnal-index');
    }

    public function editform($id)
    {
        $data = DB::table('jurnal')->where('id', '=', $id)->first();
        return view('admin/jurnal/editform', compact('data'));
    }

    public function edit(\App\Http\Requests\Jurnal $jurnal, $id)
    {
        if ($jurnal->hasFile('file')) {
            $file = $jurnal->file('file');

            $ext = $file->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $jurnal->file('file')->move('public/file-jurnal/', $name);
            $data = [
                'judul' => $jurnal->input('judul'),
                'file' => $name
            ];
        } else {
            $file = $jurnal->file('file');

            $ext = $file->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $jurnal->file('file')->move('public/file-jurnal/', $name);
            $data = [
                'judul' => $jurnal->input('judul'),
                'file' => $name
            ];
        }
        DB::table('jurnal')->where('id', '=', $id)->update($data);
        return redirect('admin/jurnal-index');
    }

    public function destroy($id)
    {
        DB::table('jurnal')->where('id', '=', $id)->delete();

        Session::flash('flash_message', 'Hapus Data Berhasil');
        return redirect('admin/jurnal-index');
    }
}
