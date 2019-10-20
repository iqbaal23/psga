@extends('layouts.app')

@section('content')

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                Tambah Data Kegiatan
                @include('layouts.flash_mesage')
                @include('layouts.flash_error')
            </div>
        </div>

        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-md-12 col-lg-12">
                    <!-- Example Rounded Input -->
                    <form action="{{url('admin/update-juara/'.$kegiatan[0]->id)}}" method="post">
                        <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nama Juara</label>
                                    <input type="hidden" value="{{$kegiatan[0]->jenis_kegiatan}}" name="nama_kegiatan">
                                    <input type="hidden" value="{{$kegiatan[0]->tanggal}}" name="tanggal">
                                    <input type="hidden" value="{{$kegiatan[0]->nama_pembuat}}" name="nama_pembuat">
                                    <input type="hidden" value="{{$kegiatan[0]->foto}}" name="foto">
                                    <input type="hidden" value="{{$kegiatan[0]->keterangan}}" name="keterangan">
                                    <input type="text" class="form-control" required value=""
                                           name="nama_juara">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline btn-primary">Save</button>
                        <a href="{{url('admin/kegiatan-juara')}}" class="btn btn-outline btn-default">Kembali</a>
                    </form>
                    <!-- End Example Rounded Input -->
                </div>
            </div>
        </div>
    </div>
@endsection