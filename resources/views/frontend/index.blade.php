@extends('layouts.frontend')

@section('frontend_content')
    <?php

    ?>
    <section class="creative-banner-1 bg-fixed parallax-bg overlay purple-7 fullscreen-banner valign-wrapper"
             data-stellar-background-ratio="0.5">
        <div class="valign-cell">
            <div class="container padding-top-160">
                <div class="text-center">
                    <h1 class="intro-title text-capitalize white-text">Pusat Studi Gender dan Anak</h1>
                    <span class="sub-intro lead white-text">Keadilan,Kesetaraan Gender Lingkungan Kampus</span>
                    <a href="#." class="btn btn-lg waves-effect waves-light mt-30">Mulai</a>
                </div><!-- hs-content-inner -->
            </div><!-- /.container -->
        </div><!-- /.container -->
    </section>


    <section class="section-padding">
        <div class="container">

            <div class="text-center mb-20">
                <h2 class="section-title text-uppercase">Apa Itu PSGA?</h2>
                <p class="">Pusat Studi Gender (PSG) adalah sebuah unit di UIN SUSKA RIAU yang memiliki
                    tugas dan fungsi mendorong terwujudnya keadilan dan kesetaraan gender di lingkungan kampus dan
                    masyarakat umum. PSG didirikan atas pertimbangan bahwa masyarakat, khususnya di Kabupaten
                    Tulungagung dan sekitarnya masih banyak yang mengalami diskriminasi gender, yakni pembedaan hak,
                    kewajiban, peran, nilai manusia berdasarkan jenis kelamin yang membawa dampak pada ketidakadilan.
                    Beberapa contoh yang bisa disebutkan adalah dibatasinya hak dan peluang perempuan untuk menikmati
                    pendidikan, karena anggapan bahwa perempuan tidak perlu berilmu tinggi, cukup pandai memasak,
                    berdandan dan melahirkan anak saja</p>
            </div>

        </div><!-- /.container -->
    </section>


    <section class="section-padding list-news">
        <div class="container">

            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Latest Blog Post Artikel PSGA</h2>
            </div>


            <div class="row">
                <?php foreach ($data as $artikel): ?>

                <div class="col-md-6">
                    <article class="post-wrapper list-article">

                        <div class="hover-overlay brand-bg"></div>

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="{{url('artikel-view/'.$artikel->id)}}"><img src="{{asset('public/foto-artikel/'. $artikel->foto)}}"
                                             class="img-responsive" height="300px" width="100px" alt=""></a>
                        </div><!-- .post-thumb -->

                        <div class="blog-content">
                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="{{url('artikel-view/'.$artikel->id)}}"><?= $artikel->judul_artikel ?></a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                <i class="fa fa-user"></i> <a href="{{url('artikel-view/'.$artikel->id)}}"><?= $artikel->author ?></a>
                                            </li>
                                            <li>
                                                <i class="fa fa-clock-o"></i> <a
                                                    href="#"><?= date('d,m-Y', strtotime($artikel->tanggal)) ?></a>
                                            </li>
                                        </ul>
                                    </div><!-- .entry-meta -->
                                </div><!-- /.entry-header -->
                            </header><!-- /.entry-header-wrapper -->

                            <div class="entry-content">
                                <p><?= substr($artikel->isi, 0, 200) ?></p>
                            </div><!-- .entry-content -->
                        </div>

                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-6 -->
                <?php endforeach; ?>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>
    <!-- List News End -->

@endsection
