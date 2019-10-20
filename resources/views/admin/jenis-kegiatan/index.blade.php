<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 19/03/19
 * Time: 23:37
 */

?>
@extends('layouts.app')

@section('content')

    <div class="panel">
        <header class="panel-heading">
            <h3 class="panel-title">Jenis Kegiatan PSGA</h3>
        </header>
        <div class="panel-body">
            <div class="mb-15">
                <a href="{{url('admin/jenis-kegiatan-form')}}" class="btn btn-outline btn-primary">
                    <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data Jenis Kegiatan
                </a>
            </div>
            @if($jenis_kegiatan_list->count() > 0 )
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                    <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th>Jenis Kegiatan</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Jenis Kegiatan</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($jenis_kegiatan_list as $jenis_kegiatan): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $jenis_kegiatan->nama_kegiatan ?></td>
                        <td><?= $jenis_kegiatan->kategori ?></td>
                        <td><a href="{{url('admin/jenis-kegiatan-edit/'.$jenis_kegiatan->id)}}"
                               class="btn btn-outline btn-primary"><span class="fa fa-edit"></span>
                            </a>
                            <a href="{{url('admin/jenis-kegiatan-hapus/'.$jenis_kegiatan->id)}}"
                                class="btn btn-outline btn-danger" onclick="return confirm('Are you sure?')"><span class="fa fa-trash"></span>
                             </a>
                        </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            @else
                <p>Tidak Ada Jenis Kegiatan</p>
            @endif
        </div>
    </div>

@endsection
