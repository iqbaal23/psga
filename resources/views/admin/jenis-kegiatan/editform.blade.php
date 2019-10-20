<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 19/03/19
 * Time: 23:53
 */

?>
@extends('layouts.app')

@section('content')

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                @include('layouts.flash_mesage')
                @include('layouts.flash_error')
            </div>
        </div>

        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-md-12 col-lg-12">
                    <!-- Example Rounded Input -->
                    <form action="{{ route('editkegiatan', $data->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>
                        <div class="form-group">
                            <h4 class="">Edit Jenis Kegiatan</h4>
                            <input type="text" value="<?= $data->nama_kegiatan ?>" class="form-control round"
                                   placeholder="Jenis Kegiatan"
                                   name="nama_kegiatan">
                        </div>
                        <div class="form-group">
                            <h4 class="">Kategori</h4>
                            <select name="kategori" class="form-control round">
                                <option disabled selected>- Pilih Kategori</option>
                                <option value="Lomba" {{ $data->kategori == "Lomba" ? "Selected" : "" }}>Lomba</option>
                                <option value="Seminar" {{ $data->kategori == "Seminar" ? "Selected" : "" }}>Seminar</option>
                                <option value="Event" {{ $data->kategori == "Event" ? "Selected" : "" }}>Event</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline btn-primary">Save</button>
                        <a href="{{url('admin/jenis-kegiatan-index')}}" class="btn btn-outline btn-default">Kembali</a>
                    </form>
                    <!-- End Example Rounded Input -->
                </div>
            </div>
        </div>
    </div>
@endsection
