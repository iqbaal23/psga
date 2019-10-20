@extends('layouts.app')

@section('content')

<div class="panel">
    <header class="panel-heading">
        <h3 class="panel-title">Pendaftaran Lomba</h3>

    </header>

    <div class="panel-body">
        @if($pendaftaran_list->count() > 0 )
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th width="10%">No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
                <tbody>
                <?php
                $no = 1;
                foreach ($pendaftaran_list as $jenis_kegiatan): ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $jenis_kegiatan->nisn ?></td>
                    <td><?= $jenis_kegiatan->nama ?></td>
                    <td><?= $jenis_kegiatan->asal_sekolah ?></td>
                    <td><?= $jenis_kegiatan->jenis_kelamin ?></td>
                    <td><?= $jenis_kegiatan->umur ?></td>
                    <td><?= $jenis_kegiatan->alamat ?></td>
                    <td><?= $jenis_kegiatan->no_hp ?></td>
                    <td><a href="{{url('admin/pendaftaran-view/'.$jenis_kegiatan->id)}}"
                           class="btn btn-outline btn-warning"><span class="fa fa-eye"></span>
                        </a></td>
                </tr>
                <?php $no++; endforeach; ?>
                </tbody>
            </table>
        @else
            <p>Tidak Ada Pendaftaran</p>
        @endif
    </div>
</div>
@endsection

