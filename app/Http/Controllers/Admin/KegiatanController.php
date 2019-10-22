<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class KegiatanController extends Controller
{
    //l
    public function index()
    {
        $kegiatan_list = \App\Kegiatan::all();
        $i = 0;
        foreach($kegiatan_list as $kegiatan){
            $jenis_kegiatan = DB::table('jenis_kegiatan')->where('id', '=', $kegiatan->id_jenis_kegiatan)->first();
            $kegiatan_list[$i]->jenis_kegiatan = $jenis_kegiatan->nama_kegiatan;
            $i++;
        }
        return view('admin/kegiatan/index', compact('kegiatan_list'));
    }
    public function tambahform()
    {
        $jenis_kegiatan_list = \App\JenisKegiatan::all();
        return view('admin/kegiatan/tambahform', compact('jenis_kegiatan_list'));
    }
    public function store(Kegiatan $kegiatan){

        if ($kegiatan->hasFile('foto')) {
            $foto = $kegiatan->file('foto');

            $ext = $foto->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $kegiatan->file('foto')->move('public/foto-kegiatan/', $name);
            $data = [
                'id_jenis_kegiatan' => $kegiatan->input('id_jenis_kegiatan'),
                'nama_kegiatan' => $kegiatan->input('nama_kegiatan'),
                'keterangan' => $kegiatan->input('keterangan'),
                'foto' => $name,
                'nama_pembuat' => $kegiatan->input('nama_pembuat'),
                'tanggal' => $kegiatan->input('tanggal')
            ];
        } else {
            $foto = $kegiatan->file('foto');

            $ext = $foto->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $kegiatan->file('foto')->move('public/foto-kegiatan/', $name);
            $data = [
                'id_jenis_kegiatan' => $kegiatan->input('id_jenis_kegiatan'),
                'nama_kegiatan' => $kegiatan->input('nama_kegiatan'),
                'keterangan' => $kegiatan->input('keterangan'),
                'foto' => $name,
                'nama_pembuat' => $kegiatan->input('nama_pembuat'),
                'tanggal' => $kegiatan->input('tanggal')
            ];
        }

        DB::table('kegiatan')->insert($data);
        Session::flash('flash_message', 'Tambah Data Berhasil');
        return redirect('admin/kegiatan-index');
    }
    public function view($id)
    {
        $data = DB::table('kegiatan')->where('id', '=', $id)->first();
        $kategori = DB::table('kegiatan')
                    ->join('jenis_kegiatan', 'kegiatan.id_jenis_kegiatan', '=', 'jenis_kegiatan.id')
                    ->select('kategori')
                    ->where('kegiatan.id', '=', $id)
                    ->get()
                    ->first();
        if($kategori->kategori == 'lomba'){
            $peserta_list = \App\Pendaftaran::all();
        } else {
            // $peserta_list = \App\PendaftaranLainnya::all();
            $peserta_list = DB::table('pendaftaran_seminar')->where('id_kegiatan', '=', $data->id)->get();
        }
        return view('admin/kegiatan/view', compact('data', 'peserta_list', 'kategori'));
    }

    public function editform($id)
    {
        $jenis_kegiatan_list = \App\JenisKegiatan::all();
        $data = DB::table('kegiatan')->where('id', '=', $id)->first();
        return view('admin/kegiatan/editkegiatan', compact('data', 'jenis_kegiatan_list'));
    }
    public function indexJuara()
    {
        $kegiatan_list = \App\Kegiatan::all();
        return view('admin/kegiatan/indexjuara', compact('kegiatan_list'));
    }
    public function formJuara($id){
        //$data['id'] = $id;
        $data['kegiatan'] = DB::table('kegiatan')->where('id',$id)->get();
        return view('admin/kegiatan/tambahjuara',$data);
    }
    public function updateJuara(Kegiatan $kegiatan,$id){
        $data = [
            'nama_kegiatan' => $kegiatan->input('nama_kegiatan'),
            'keterangan' => $kegiatan->input('keterangan'),
            'foto' => $kegiatan->input('foto'),
            'nama_pembuat' => $kegiatan->input('nama_pembuat'),
            'tanggal' => $kegiatan->input('tanggal'),
            'nama_juara' => $kegiatan->input('nama_juara'),
        ];
        \App\Kegiatan::where('id',$id)->update($data);
        Session::flash('flash_message', 'Update Data Berhasil');
        return redirect('admin/kegiatan-juara');
    }
    public function edit( Kegiatan $kegiatan, $id)
    {
        $foto = $kegiatan->file('foto');

        $ext = $foto->getClientOriginalExtension();
        $name = date('Ymdhis') . "." . $ext;
        $kegiatan->file('foto')->move('public/foto-kegiatan/', $name);
        $data = [
            'id_jenis_kegiatan' => $kegiatan->input('id_jenis_kegiatan'),
            'nama_kegiatan' => $kegiatan->input('nama_kegiatan'),
            'keterangan' => $kegiatan->input('keterangan'),
            'foto' => $name,
            'nama_pembuat' => $kegiatan->input('nama_pembuat'),
            'tanggal' => $kegiatan->input('tanggal')
        ];
        DB::table('kegiatan')->where('id', '=', $id)->update($data);
        Session::flash('flash_message', 'Update Data Berhasil');
        return redirect('admin/kegiatan-index');
    }
    public function destroy($id)
    {
        DB::table('kegiatan')->where('id', '=', $id)->delete();


        Session::flash('flash_message', 'Hapus Data Berhasil');
        return redirect('admin/kegiatan-index');
    }
}
