<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 20/03/19
 * Time: 9:23
 */
?>

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Panel Standard Editor -->
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        @include('layouts.flash_mesage')
                        @include('layouts.flash_error')
                    </div>
                </div>
                <hr>
                <div class="panel-body">
                    <form action="{{url('admin/artikel')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn btn-outline btn-primary" style="float: right" type="submit">Save
                                        Artikel
                                    </button>
                                    <a href="{{url('admin/artikel-index')}}"
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
                                    <label for="">Judul Artikel</label>
                                    <textarea type="text" name="judul_artikel" id="summernote"
                                              data-plugin="summernote" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Isi Artikel</label>
                                    <textarea type="text" name="isi" id="summernotes"
                                              data-plugin="summernote" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input type="file" name="foto" id="input-file-max-fs" data-plugin="dropify"
                                           data-max-file-size="2M">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn btn-outline btn-primary" style="float: right" type="submit">Save
                                        Artikel
                                    </button>
                                    <a href="{{url('admin/artikel-index')}}"
                                       class="btn btn-outline btn-default">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
