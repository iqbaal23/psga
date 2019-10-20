<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Http\Requests\PendaftaranLomba;
use App\Http\Requests\PendaftaranLainnya;
use App\JenisKegiatan;
use App\Http\Requests\Komentar;
use App\Pendaftaran;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //

    public function index()
    {
        $this->middleware('auth');
        $data = DB::table('artikel')
            ->select('artikel.*')
            ->orderBy('tanggal', 'ASC')
            ->take(4)
            ->get();
        //        var_dump($data);
        //        count($data);
        //        exit();
        return view('frontend.index', compact('data'));
    }

    public function artikel()
    {
        $tahun_list = DB::table('artikel')->distinct()->select(DB::raw('YEAR(tanggal) as tahun'))->orderBy('tanggal', 'ASC')->get();

        $data = DB::table('artikel')->orderBy('tanggal', 'DESC');
        if(isset($_GET['judul'])){
            if($_GET['judul'] != ''){
                $data = $data->where('judul_artikel', 'like', '%'.$_GET['judul'].'%');
            }
        }
        if(isset($_GET['tahun'])){
            $data = $data->where(DB::raw('YEAR(tanggal)'), '=', $_GET['tahun']);
        }
        $data = $data->paginate();
        return view('frontend.artikel', compact('data', 'tahun_list'));
    }
    public function viewArtikel($id)
    {
        $data['data'] = DB::table('artikel')->where('id', '=', $id)->first();
        $data['komentar'] = DB::table('komentar')->where('artikel_id', '=', $id)->orderBy('tanggal','ASC')->get();
        return view('frontend.viewartikel', $data);
    }

    public function komentar($artikelid){
        $data['artikelid'] = $artikelid;
        return view('frontend.formkomentar',$data);
    }

    public function storekomentar(Komentar $komentar,$id){
        $data = [
            'artikel_id' => $komentar->input('artikel_id'),
            'isi' => $komentar->input('komentar'),
            'username' => Auth::user()->name
        ];

        DB::table('komentar')->insert($data);
        Session::flash('flash_message', 'komentar berhasil ditambah');
        return redirect('artikel-view/'.$id);
    }

    public function kegiatan()
    {
        $data = DB::table('kegiatan')->orderBy('tanggal', 'DESC')->paginate();
        return view('frontend.kegiatan', compact('data'));
    }

    public function viewKegiatan($id)
    {
        $data = DB::table('kegiatan')->where('id', '=', $id)->first();
        return view('frontend.viewkegiatan', compact('data'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function pendaftaran()
    {
        return view('frontend.pendaftaran');
    }

    public function daftarlomba()
    {
        return view('frontend.daftarlomba');
    }

    public function lombaDaftarView($id){
        $data['id'] = $id;
        $kategori = DB::table('kegiatan')
                    ->join('jenis_kegiatan', 'kegiatan.id_jenis_kegiatan', '=', 'jenis_kegiatan.id')
                    ->select('kategori')
                    ->where('kegiatan.id', '=', $id)
                    ->get()
                    ->first();
        $data['kategori'] = $kategori->kategori;
        return view('frontend.daftarlomba',$data);
    }

    public function tambahpendaftaran(PendaftaranLomba $pendaftaranLomba)
    {
        if ($pendaftaranLomba->hasFile('cerita') && $pendaftaranLomba->hasFile('pengantar') ){

            $cerita = $pendaftaranLomba->file('cerita');
            $ext = $cerita->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $pendaftaranLomba->file('cerita')->move('public/cerita-lomba/', $name);

            $pengantar = $pendaftaranLomba->file('pengantar');
            $ext1 = $pengantar->getClientOriginalExtension();
            $name1 = date('Ymdhis') . "." . $ext1;
            $pendaftaranLomba->file('pengantar')->move('public/surat-pengantar/', $name1);

            $data = [
                'nisn' => $pendaftaranLomba->input('nisn'),
                'nama' => $pendaftaranLomba->input('nama'),
                'asal_sekolah' => $pendaftaranLomba->input('asal_sekolah'),
                'umur' => $pendaftaranLomba->input('umur'),
                'alamat' => $pendaftaranLomba->input('alamat'),
                'no_hp' => $pendaftaranLomba->input('no_hp'),
                'email_guru' => $pendaftaranLomba->input('email_guru'),
                'id_kegiatan' => $pendaftaranLomba->input('id_kegiatan'),
                'judul_cerita' => $pendaftaranLomba->input('judul_cerita'),
                'cerita_lomba' => $name,
                'pengantar' => $name1,
            ];
        } else {
            $cerita = $pendaftaranLomba->file('cerita');
            $ext = $cerita->getClientOriginalExtension();
            $name = date('Ymdhis') . "." . $ext;
            $pendaftaranLomba->file('cerita')->move('public/cerita-lomba/', $name);

            $pengantar = $pendaftaranLomba->file('pengantar');
            $ext1 = $pengantar->getClientOriginalExtension();
            $name1 = date('Ymdhis') . "." . $ext1;
            $pendaftaranLomba->file('pengantar')->move('public/surat-pengantar/', $name1);
            $data = [
                'nisn' => $pendaftaranLomba->input('nisn'),
                'nama' => $pendaftaranLomba->input('nama'),
                'asal_sekolah' => $pendaftaranLomba->input('asal_sekolah'),
                'umur' => $pendaftaranLomba->input('umur'),
                'alamat' => $pendaftaranLomba->input('alamat'),
                'no_hp' => $pendaftaranLomba->input('no_hp'),
                'email_guru' => $pendaftaranLomba->input('email_guru'),
                'id_kegiatan' => $pendaftaranLomba->input('id_kegiatan'),
                'judul_cerita' => $pendaftaranLomba->input('judul_cerita'),
                'cerita_lomba' => $name,
                'pengantar' => $name1,
            ];
        }

//        var_dump($data);die;
        //        Pendaftaran::created($data);
        DB::table('pendaftaran')->insert($data);
        Session::flash('flash_message', 'Selamat Anda Berhasil Mengirim Cerita');

        return redirect('kegiatan');
    }

    public function tambahPendaftaranLainnya(PendaftaranLainnya $pendaftaranLainnya)
    {
        $data = [
            'nama' => $pendaftaranLainnya->input('nama'),
            'email' => $pendaftaranLainnya->input('email'),
            'status' => $pendaftaranLainnya->input('status'),
            'no_hp' => $pendaftaranLainnya->input('no_hp'),
            'id_kegiatan' => $pendaftaranLainnya->input('id_kegiatan'),
        ];

        DB::table('pendaftaran_seminar')->insert($data);
        Session::flash('flash_message', 'Selamat Anda Berhasil Mendaftar');

        return redirect('kegiatan');
    }

    public function pengumuman(){
        $data = DB::table('kegiatan')->orderBy('tanggal', 'DESC')->paginate();
        return view('frontend.pengumuman', compact('data'));
    }

    public function viewPengumuman($id)
    {
        $data = DB::table('kegiatan')->where('id', '=', $id)->first();
        return view('frontend.viewpengumuman', compact('data'));
    }

 
    public function jurnal()
    {
        $data = DB::table('jurnal')->orderBy('tanggal', 'DESC')->paginate();
        return view('frontend.jurnal', compact('data'));
    }
}
