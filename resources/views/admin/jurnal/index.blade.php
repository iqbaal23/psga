@extends('layouts.app')

@section('content')

    <div class="panel">
        <header class="panel-heading">
            <h3 class="panel-title">Jurnal</h3>
        </header>
        <div class="panel-body">
            <div class="mb-15">
                <a href="{{url('admin/jurnal-form')}}" class="btn btn-outline btn-primary">
                    <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data Jurnal
                </a>
            </div>
            @if($jurnal_list->count() > 0 )
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                    <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th>Nama Jurnal</th>
                        <th>Tanggal</th>
                        <th>Author</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Jurnal</th>
                        <th>Tanggal</th>
                        <th>Author</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($jurnal_list as $jurnal): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $jurnal->judul ?></td>
                        <td><?= $jurnal->tanggal ?></td>
                        <td><?= $jurnal->author ?></td>
                        <td><a href="{{url('admin/jurnal-edit/'.$jurnal->id)}}"
                               class="btn btn-outline btn-primary"><span class="fa fa-edit"></span>
                            </a>
                            <a href="{{url('admin/jurnal-hapus/'.$jurnal->id)}}"
                                class="btn btn-outline btn-primary"><span class="fa fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            @else
                <p>Tidak Ada Jurnal</p>
            @endif
        </div>
    </div>

@endsection
