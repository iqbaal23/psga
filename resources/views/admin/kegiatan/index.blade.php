
@extends('layouts.app')

@section('content')

    <div class="panel">
        <header class="panel-heading">
            <h3 class="panel-title">Kegiatan</h3>
            <div class="panel-title">
                        @include('layouts.flash_mesage')
                        @include('layouts.flash_error')
                    </div>
        </header>
        <div class="panel-body">
            <div class="mb-15">
                <a href="{{url('admin/kegiatan-form')}}" class="btn btn-outline btn-primary">
                    <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data Kegiatan
                </a>
            </div>
            @if($kegiatan_list->count() > 0)
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                    <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th>Nama Kegiatan</th>
                        <th>Jenis Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Jenis Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($kegiatan_list as $kegiatan): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $kegiatan->nama_kegiatan ?></td>
                        <td><?= $kegiatan->jenis_kegiatan ?></td>
                        <td><?= $kegiatan->tanggal ?></td>
                        <td><a href="{{url('admin/editform2/'.$kegiatan->id)}}"
                               class="btn btn-outline btn-primary"><span class="fa fa-edit"></span>
                            </a>
                            <a href="{{url('admin/kegiatan-view/'.$kegiatan->id)}}"
                               class="btn btn-outline btn-warning"><span class="fa fa-eye"></span>
                            </a>
                            <a href="{{url('admin/kegiatan-hapus/'.$kegiatan->id)}}"
                               class="btn btn-outline btn-danger" onclick="return confirm('Are you sure?')"><span class="fa fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            @else
                <p>Tidak Ada Kegiatan</p>
            @endif
        </div>
    </div>

@endsection
