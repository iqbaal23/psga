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
                    <form action="{{ route('editkegiatan1', $data->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" class="form-control" readonly value="<?= date('Y-m-d') ?>"
                                           name="tanggal">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nama Pembuat</label>
                                    <input type="text" class="form-control" readonly value="{{Auth::user()->name }}"
                                           name="nama_pembuat">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label>
                                    <textarea type="text" name="nama_kegiatan" id="summernote"
                                              data-plugin="summernote" rows="3"><?= $data->nama_kegiatan ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Jenis Kegiatan</label>
                                    <select name="id_jenis_kegiatan" class="form-control">
                                        <option disabled>- Pilih Jenis Kegiatan</option>
                                        @foreach ($jenis_kegiatan_list as $jenis_kegiatan)
                                            <option value="{{ $jenis_kegiatan->id }}" {{ $data->id_jenis_kegiatan == $jenis_kegiatan->id ? 'selected' : '' }}>{{ $jenis_kegiatan->nama_kegiatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <textarea type="text" name="keterangan" id="summernotes"
                                              data-plugin="summernote" rows="3"><?= $data->keterangan ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input type="file" name="foto" id="input-file-max-fs" data-plugin="dropify"
                                           data-max-file-size="2M">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline btn-primary">Save</button>
                        <a href="{{url('admin/kegiatan-index')}}" class="btn btn-outline btn-default">Kembali</a>
                    </form>
                    <!-- End Example Rounded Input -->
                </div>
            </div>
        </div>
    </div>
@endsection