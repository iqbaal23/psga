<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 13/04/19
 * Time: 12:01
 */
?>
@extends('layouts.frontend')

@section('frontend_content')
    <section class="page-title page-title-center cover-4 padding-top-220 padding-bottom-120 overlay purple-5 fixed-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="white-text font-40 text-bold">Pendaftaran LPPM</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">

            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">PENDAFTARAN LPPM PSGA</h2>
            </div>

            <div class="row no-gutter">
                <div class="col-lg-offset-3 col-md-3 col-sm-6">
                    <a href="{{url('pendaftranlomba')}}">
                        <div class="featured-box border-right text-center hover brand-hover">
                            <div class="featured-wrapper">
                                <div class="intro-header">
                                    <i class="material-icons brand-icon">&#xE53B;</i>
                                    <h2>Pendaftaran Lomba</h2>
                                </div>

                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo
                                        vitae
                                        tempora.</p>
                                </div>
                            </div><!-- /.featured-wrapper -->
                        </div><!-- /.featured-box  -->
                    </a>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <a href="">
                        <div class="featured-box border-right text-center hover brand-hover">
                            <div class="featured-wrapper">
                                <div class="intro-header">
                                    <i class="material-icons brand-icon">&#xE051;</i>
                                    <h2>Pendaftaran</h2>
                                </div>

                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo
                                        vitae
                                        tempora.</p>
                                </div>
                            </div><!-- /.featured-wrapper -->
                        </div><!-- /.featured-box  -->
                    </a>
                </div><!-- /.col-md-3 -->
            </div>
        </div>
    </section>

@endsection

