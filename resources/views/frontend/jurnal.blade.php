@extends('layouts.frontend')
@section('styles')
    <link rel="stylesheet" href="{{asset('public/frontend/assets/dataTables/css/dataTables.bootstrap4.min.css')}}">
    <style>
        label{
            font-size: 14px;
        }
    </style>

    <script src="{{asset('public/frontend/assets/dataTables/js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('public/frontend/assets/dataTables/js/jquery.dataTables.min.js')}}" defer></script>
    <script src="{{asset('public/frontend/assets/dataTables/js/dataTables.bootstrap4.min.js')}}" defer></script>
@endsection
@section('frontend_content')
<section class="page-title page-title-center cover-4 padding-top-220 padding-bottom-120 overlay purple-5 fixed-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="white-text font-40 text-bold">Jurnal</h2>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">

        <div class="row">

                @if($data->count() > 0 )
                <table class="table table-hover table-striped" id="table_jurnal">
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
                    foreach ($data as $jurnal): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $jurnal->judul ?></td>
                        <td><?= $jurnal->tanggal ?></td>
                        <td><?= $jurnal->author ?></td>
                        <td><a href="{{asset('public/file-jurnal/'.$jurnal->file)}}"
                               class="btn btn-outline btn-primary"><span class="fa fa-download"></span>
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

        {{$data->links()}}


    </div><!-- /.container -->
</section>
@section('frontend_content')
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#table_jurnal').DataTable({
                "columns": [
                    {"orderable": false},
                    null,
                    null,
                    null,
                    {"orderable": false},
                ]
            })
        });
    </script>
@endsection