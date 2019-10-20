<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 20/03/19
 * Time: 9:15
 */
?>

@extends('layouts.app')

@section('content')
    <div class="panel">
        <header class="panel-heading">
            <h3 class="panel-title">Artikel PSGA</h3>
            <div class="panel-title">
                        @include('layouts.flash_mesage')
                        @include('layouts.flash_error')
                    </div>
        </header>
        <div class="panel-body">
            <div class="mb-15">
                <a href="{{url('admin/artikel-form')}}" class="btn btn-outline btn-primary">
                    <i class="icon wb-plus" aria-hidden="true"></i> Tambah Artikel
                </a>
            </div>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Judul Artikel</th>
                    <th>Tanggal</th>
                    <th>Author</th>
                    <th>Aksi</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th width="10%">No</th>
                    <th>Judul Artikel</th>
                    <th>Tanggal</th>
                    <th>Author</th>
                    <th>Aksi</th>

                </tr>
                </tfoot>
                <tbody>

                <?php
                $no = 1;
                foreach ($artikel_list as $artikel): ?>
                <tr>
                    <td width="5%"><?= $no ?></td>

                    <td style="font-size: 20px"><?= $artikel->judul_artikel?></td>
                    <td><?= date('d/m/Y', strtotime($artikel->tanggal))?></td>

                    <td><?= $artikel->author?></td>
                    <td><a href="{{url('admin/editform1/'.$artikel->id)}}"
                           class="btn btn-outline btn-primary"><span class="fa fa-edit"></span>
                        </a>
                        <a href="{{url('admin/artikel-view/'.$artikel->id)}}"
                           class="btn btn-outline btn-warning"><span class="fa fa-eye"></span>
                        </a>
                        <a href="{{url('admin/artikel-hapus/'.$artikel->id)}}"
                           class="btn btn-outline btn-danger" onclick="return confirm('Are you sure?')"><span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

@endsection
