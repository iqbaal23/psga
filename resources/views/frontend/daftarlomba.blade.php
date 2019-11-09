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
                    <h2 class="white-text font-40 text-bold">Pendaftaran Lomba</h2>
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

                    @if($kategori == 'Lomba')
                        <form id="form" action="{{url('tambah-pendaftaran-lomba')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-field">
                                        <input type="hidden" name="id_kegiatan" class="form-control" id="name" value="{{$id}}">
                                        <input type="number" name="nisn" class="form-control" id="name" required>
                                        <label for="name">Nisn</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-3">
                                    <div class="input-field">
                                        <input type="text" name="nama" class="form-control" id="name" required>
                                        <label for="name">Nama</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <input type="text" name="asal_sekolah" class="form-control" id="name" required>
                                        <label for="name">Asal Sekolah</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-3">
                                    <div class="input-field">
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                            <option value="Tambahkan Sendiri">Tambahkan Sendiri</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-3">
                                    <div class="input-field">
                                        <input type="number" name="umur" class="form-control" id="name" required>
                                        <label for="name">Umur</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <input type="text" name="alamat" class="form-control" id="name" required>
                                        <label for="name">Alamat</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-3">
                                    <div class="input-field">
                                        <input type="number" name="no_hp" class="form-control" id="name" required>
                                        <label for="name">No Hp</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-9">
                                    <div class="input-field">
                                        <input type="email" name="email_guru" class="form-control" id="name" required>
                                        <label for="name">E-Mail guru</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <hr>
                                    <br>
                                    <h2>Masukkan Cerita Berbasis Gender</h2>
                                    <p>Baca Syarat dan Ketentuan</p>
                                    <ol type="1">
                                        <li>lebih 1000 kata unsur</li>
                                        <li>tidak mengandung SARA</li>
                                        <li>tidak mengandung pornografi</li>
                                    </ol>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input type="text" name="judul_cerita" class="form-control" id="name" required>
                                        <label for="name">Judul Cerita</label>
                                    </div>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="">Upload Surat Pengantar</label>
                                        <input class="form-control" type="file" name="pengantar" id="input-file-max-fs" required>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="">Upload Cerita</label>
                                        <input class="form-control" type="file" name="cerita" id="input-file-max-fs" required>
                                    </div>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <div class="form-group"  style="text-align:center;">
                                        <script type="text/javascript">DrawBotBoot()</script>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit"
                                            class="waves-effect waves-light btn brand-bg
                                            pull-right mt-30"
                                            onclick="(ValidBotBoot(event));">Daftarkan
                                    </button>
                                </div>
                            </div>
                        </form>
                        @else
                        <form id="form" action="{{url('tambah-pendaftaran-lainnya')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?= csrf_token() ?>" class="form-control"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <input type="hidden" name="id_kegiatan" class="form-control" value="{{$id}}">
                                        <input type="text" name="nama" class="form-control" id="nama">
                                        <label for="nama">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <input type="email" name="email" class="form-control" id="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <select name="status" class="form-control" id="status">
                                            <option disabled selected>- Pilih Status -</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                            <option value="Pelajar">Pelajar</option>
                                            <option value="Umum">Umum</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <input type="number" name="no_hp" class="form-control" id="no_hp">
                                        <label for="no_hp">No Hp</label>
                                    </div>
                                </div>

                                <div class="col-md-6 pull-right">
                                    <div class="form-group"  style="text-align:center;">
                                        <script type="text/javascript">DrawBotBoot()</script>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit"
                                            class="waves-effect waves-light btn brand-bg
                                            pull-right mt-30"
                                            onclick="(ValidBotBoot(event));">Daftarkan
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

<script type="text/javascript">
    var a = Math.ceil(Math.random() * 10);
    var b = Math.ceil(Math.random() * 10);
    var c = a + b
    function DrawBotBoot()
    {
        document.write("<label style='font-size:18px'>Berapa jumlah "+ a + " + " + b +" ? </label>");
        document.write("<input id='BotBootInput' type='text' maxlength='2' size='2' class='form-control' placeholder='Masukkan jawaban anda!' autocomplete='off'/>");
    }
    function ValidBotBoot(e){
        var d = document.getElementById('BotBootInput').value;
        if (d == c){
            return document.getElementById('form').submit();
        } else{
            e.preventDefault();
            alert('Captcha Salah!');
            return false;
        }

    }
</script>
