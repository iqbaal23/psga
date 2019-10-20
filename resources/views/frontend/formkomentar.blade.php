<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 13/04/19
 * Time: 12:09
 */
?>
@extends('layouts.frontend')

@section('frontend_content')
    <section class="page-title page-title-center cover-4 padding-top-120 padding-bottom-20 overlay purple-5 fixed-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="white-text font-40 text-bold">Tambah komentar</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.flash_mesage')
                    @include('layouts.flash_error')
                    <form action="{{url('tambah-komentar/'.$artikelid)}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input type="hidden" name="artikel_id" class="form-control" id="name" value="{{$artikelid}}">
                                    <input type="text" name="komentar" class="form-control" id="name">
                                    <label for="name">Komentar</label>
                                </div>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-12">
                                <button type="submit" name="submit"
                                        class="waves-effect waves-light btn brand-bg
                                        pull-right mt-30">Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
