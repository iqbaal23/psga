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
                    <img class="img img-thumbnail" src="{{asset('public/foto-kegiatan/'.$data->foto)}}"
                         style="background-size: cover !important;" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="panel">
                <div class="panel-heading">
                    <h2 class="panel-title"><?= $data->nama_kegiatan ?></h2>
                </div>
                <div class="panel-body">
                    <p><?= $data->keterangan ?></p>
                    <p><b>Author : </b><?= $data->nama_pembuat ?></p>
                    <a href="{{url('admin/kegiatan-index')}}" class="btn btn-outline btn-warning"><span class="fa fa-backward"></span> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
