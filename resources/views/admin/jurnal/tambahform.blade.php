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
                    <h4>Tambah Jurnal</h4>
                    <form action="{{url('admin/jurnal')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn btn-outline btn-primary" style="float: right" type="submit">Save
                                        Jurnal
                                    </button>
                                    <a href="{{url('admin/jurnal-index')}}"
                                       class="btn btn-outline btn-default">Kembali</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" class="form-control" readonly value="<?= date('Y-m-d') ?>"
                                           name="tanggal">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Author</label>
                                    <input type="text" class="form-control" readonly value="{{Auth::user()->name }}"
                                           name="author">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Judul Jurnal</label>
                                    <textarea type="text" name="judul" id="summernote"
                                              data-plugin="summernote" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Upload File</label>
                                    <input type="file" name="file" id="input-file-max-fs" data-plugin="dropify"
                                           data-max-file-size="2M">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn btn-outline btn-primary" style="float: right" type="submit">Save
                                        Jurnal
                                    </button>
                                    <a href="{{url('admin/jurnal-index')}}"
                                       class="btn btn-outline btn-default">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Example Rounded Input -->
                </div>
            </div>
        </div>
    </div>
@endsection
