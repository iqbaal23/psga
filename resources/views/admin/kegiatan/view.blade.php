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
        <div class="col-lg-12">
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">Data Peserta</h3>
                </header>
                <div class="panel-body">
                    @if($peserta_list->count() > 0)
                    <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                        <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>No HP</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>No HP</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($peserta_list as $peserta): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $peserta->nama ?></td>
                            <td><?= $peserta->email ?></td>
                            <td><?= $peserta->status ?></td>
                            <td><?= $peserta->no_hp ?></td>
                        </tr>
                        <?php $no++; endforeach; ?>
                        </tbody>
                    </table>
                    @else
                        <p>Tidak Ada Peserta</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
