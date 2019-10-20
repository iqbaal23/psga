
@extends('layouts.app')

@section('content')

    <div class="panel">
        <header class="panel-heading">
            <h3 class="panel-title">Kegiatan</h3>
        </header>
        <div class="panel-body">
            <div class="mb-15">
            </div>
            @if($kegiatan_list->count() > 0)
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                    <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Nama Juara</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Nama Juara</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($kegiatan_list as $kegiatan): ?>
                    <tr>
                        <td>{{$no }}</td>
                        <td><?= $kegiatan->jenis_kegiatan ?></td>
                        <td><?= $kegiatan->tanggal ?></td>
                        <td>@if($kegiatan->nama_juara == null):
                            <a href="{{url('admin/form-juara/'.$kegiatan->id)}}"
                               class="btn btn-outline btn-warning"><span class="fa fa-edit"></span> Tentukan Juara
                            </a>
                                @else
                                {{$kegiatan->nama_juara}}
                            @endif
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