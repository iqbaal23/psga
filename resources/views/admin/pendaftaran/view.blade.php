<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 20/03/19
 * Time: 16:10
 */
?>


@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-5">
            <div class="panel">
                <div class="panel-body">
                    <h2 class="panel-title"><?= $data->nama ?></h2>
                    <p>NISN : <?= $data->nisn ?></p>
                    <p>Asal Sekolah : <?= $data->asal_sekolah ?></p>
                    <p>Jenis Kelamin : <?= $data->jenis_kelamin ?></p>
                    <p>Umur : <?= $data->umur ?></p>
                    <p>Alamat : <?= $data->alamat ?></p>
                    <p>Nomor HP : <?= $data->no_hp ?></p>
                    <p>Email Guru : <?= $data->email_guru ?></p>
{{--                    <img class="img img-thumbnail" src="{{asset('public/foto-kegiatan/'.$data->foto)}}"--}}
{{--                         style="background-size: cover !important;" alt="">--}}
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="panel">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <h2 class="panel-title"><?= $data->judul_cerita ?></h2>
                    <a href="{{asset('public/cerita-lomba/'.$data->cerita_lomba)}}"class="btn btn-outline btn-success"><span class="fa fa-download"></span> Download Cerita</a><br><br>
                    <a href="{{asset('public/surat-pengantar/'.$data->pengantar)}}"class="btn btn-outline btn-success"><span class="fa fa-download"></span> Download Pengantar</a><br>
                    <br>
                    <a href="{{url('admin/listpendaftaran')}}" class="btn btn-outline btn-warning"><span class="fa fa-backward"></span> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
