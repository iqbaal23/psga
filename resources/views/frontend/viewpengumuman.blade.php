<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 20/03/19
 * Time: 16:10
 */
?>
@extends('layouts.frontend')

@section('frontend_content')
<section class="page-title page-title-center cover-4 padding-top-220 padding-bottom-120 overlay purple-5 fixed-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="white-text font-40 text-bold">Pengumuman Juara</h2>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-lg-5">
        <div class="panel">
            <div class="panel-body">
                <img class="img img-thumbnail" src="{{asset('public/foto-kegiatan/'.$data->foto)}}"
                     style="background-size: cover !important;" alt="">
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="panel">
            <div class="panel-heading">
                <h1 ><?= $data->jenis_kegiatan ?></h1>
            </div>
            <div class="panel-body">
                <?=$data->keterangan?>
                @if($data->nama_juara !=null):
                <p class="btn btn-warning">Pemenang Lomba : {{$data->nama_juara}}</p><br><br>
                @else
                        <p class="btn btn-warning">Pemenang Lomba Belum Diumumkan</p><br><br>
                    @endif
                <a href="{{url('pengumuman')}}" ><span class="fa fa-backward"></span> Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
