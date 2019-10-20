<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 20/03/19
 * Time: 18:01
 */
?>
@extends('layouts.frontend')
@section('styles')
    <style>
        p{
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('frontend_content')
    <section class="page-title page-title-center cover-4 padding-top-220 padding-bottom-120 overlay purple-5 fixed-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="white-text font-40 text-bold">Artikel</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="col-md-12 mb-30">
                <form action="">
                    <div class="input-field">
                        <input type="text" name="judul" id="judul" value="{{ isset($_GET['judul']) ? $_GET['judul'] : '' }}">
                        <label for="judul">Judul</label>
                    </div>

                    <div class="input-field" style="margin-top: 10px">
                        <select name="tahun" class="browser-default">
                            <?php
                                $getTahun = null;
                                if(isset($_GET['tahun'])){
                                    $getTahun = $_GET['tahun'];
                                }
                            ?>
                            <option disabled {{ $getTahun == null ? 'selected' : '' }}>- Pilih Tahun -</option>
                            @foreach ($tahun_list as $tahun)
                                <option value="{{ $tahun->tahun }}" {{ $getTahun == $tahun->tahun ? 'selected' : '' }}>{{ $tahun->tahun }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="right">
                        <button type="submit" class="btn waves-effect waves-light mt-30">Cari</button>
                        <a href="{{ url('artikel') }}" class="btn waves-effect waves-light red mt-30">Reset</a>
                    </div>
                </form>
            </div>

            @foreach ($data as $list_artikel)
                <div class="row">
                    <div class="col-md-4 mb-sm-50">
                        <a href="{{ url('artikel-view/'.$list_artikel->id) }}"><img src="{{ asset('public/foto-artikel/'.$list_artikel->foto) }}" height="200px" width="300px" alt=""></a>
                    </div>
                    <div class="col-md-8">
                        <h2 class="font-30"><a href="{{ url('artikel-view/'.$list_artikel->id) }}"><?= substr($list_artikel->judul_artikel, 0, 150) ?></a></h2>
                        <span class="font-20">{{ date('d M Y', strtotime($list_artikel->tanggal)) }}</span>
                        <p><?= substr($list_artikel->isi, 0, 200) ?> . . .</p>
                    </div>
                </div>
                <br>
            @endforeach

            {{$data->links()}}


        </div><!-- /.container -->
    </section>
@section('frontend_content')
@endsection
