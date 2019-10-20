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
                    <h2 class="white-text font-40 text-bold">Artikel</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-lg-5">
            <div class="panel">
                <div class="panel-body">
                    <img class="img img-thumbnail" src="{{asset('public/foto-artikel/'.$data->foto)}}"
                         style="background-size: cover !important;" height="3000px" width="500px"  alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="panel">
                <div class="panel-heading">
                    <h1 ><?= $data->judul_artikel ?></h1>
                </div>
                <div class="panel-body">
                    <?=$data->isi?>
                        <p><b>Author : </b><?= $data->author ?></p>
                        <div>
                            @guest
                                <a href="{{url('peserta-login')}}">Login untuk tambahkan komentar</a>
                            @else
                                <a href="{{url('komentar/'.$data->id)}}">Tambahkan komentar</a>
                            @endguest
                        </div>
                        <div>
                            @foreach($komentar as $value)
                                <div>
                                    <hr>
                                    <p><b>{{ $value->username }}</b> : {{ $value->isi}}</p>
                                </div>
                            @endforeach
                        </div>
                    <a href="{{url('artikel')}}" ><span class="fa fa-backward"></span> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
