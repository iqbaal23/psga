<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 20/03/19
 * Time: 18:01
 */
?>
@extends('layouts.frontend')
@section('styles')
    <style>
        p{
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('frontend_content')
    <section class="page-title page-title-center cover-4 padding-top-220 padding-bottom-120 overlay purple-5 fixed-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="white-text font-40 text-bold">Kegiatan</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            @include('layouts.flash_mesage')
            @include('layouts.flash_error')


            @foreach ($data as $list_kegiatan)
                <div class="row">
                    <div class="col-md-4 mb-sm-50">
                        <a href="{{ url('kegiatan-view/'.$list_kegiatan->id) }}"><img src="{{ asset('public/foto-kegiatan/'.$list_kegiatan->foto) }}" height="200px" width="300px" alt=""></a>
                    </div>
                    <div class="col-md-8">
                        <h2 class="font-30"><a href="{{ url('kegiatan-view/'.$list_kegiatan->id) }}"><?= substr($list_kegiatan->nama_kegiatan, 0, 150) ?></a></h2>
                        <span class="font-20">{{ date('d M Y', strtotime($list_kegiatan->tanggal)) }}</span>
                        <p><?= substr($list_kegiatan->keterangan, 0, 200) ?> . . .</p>
                    </div>
                </div>
                <br>
            @endforeach

            {{$data->links()}}


        </div><!-- /.container -->
    </section>
@section('frontend_content')
@endsection
