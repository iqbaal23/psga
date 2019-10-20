<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 20/03/19
 * Time: 18:01
 */
?>
@extends('layouts.frontend')

@section('frontend_content')
    <section class="page-title page-title-center cover-4 padding-top-220 padding-bottom-120 overlay purple-5 fixed-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="white-text font-40 text-bold">Pengumuman Juara</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            @include('layouts.flash_mesage')
            @include('layouts.flash_error')

            <div class="row">
                <?php foreach ($data as $list_kegiatan): ?>

                <div class="col-md-4">
                    <article class="post-wrapper">
                        <div class="thumb-wrapper">
                            <a href="{{url('pengumuman-view/'.$list_kegiatan->id)}}"><img src="{{asset('public/foto-kegiatan/'.$list_kegiatan->foto)}}" alt=""></a>


                            <div class="entry-header">

                                <h2 class="entry-title"><a href="{{url('pengumuman-view/'.$list_kegiatan->id)}}"><?= $list_kegiatan->jenis_kegiatan ?></a></h2>

                            </div><!-- .entry-header -->

                            <div class="author-thumb waves-effect waves-light">
                                <a href="{{url('pengumuman-view/'.$list_kegiatan->id)}}"><img src="{{asset('public/foto-kegiatan/'.$list_kegiatan->foto)}}" alt=""></a>
                            </div>

                        </div><!-- .post-thumb -->


                        <div class="entry-content">
                            <p><?= substr($list_kegiatan->keterangan, 0, 200) ?></p>
                        </div><!-- .entry-content -->

                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-4 -->
                <input type="hidden" autofocus>

                <?php endforeach; ?>
            </div>

            {{$data->links()}}


        </div><!-- /.container -->
    </section>
@section('frontend_content')
@endsection
