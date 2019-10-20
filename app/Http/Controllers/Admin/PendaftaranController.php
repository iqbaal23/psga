<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pendaftaran;
use DB;

class PendaftaranController extends Controller
{
    //
    public function index()
    {
        $pendaftaran_list = Pendaftaran::all();
        return view('admin/pendaftaran/index', compact('pendaftaran_list'));
    }
    public function view($id)
    {
        $data = DB::table('pendaftaran')->where('id', '=', $id)->first();
        return view('admin/pendaftaran/view', compact('data'));
    }
}
