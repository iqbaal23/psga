@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-3 col-xl-4">
                <!-- Panel Web Designer -->
                <div class="card card-shadow">
                    <div class="card-block text-center bg-white p-40">
                        <div class="avatar avatar-100 mb-20">
                            <img src="{{asset('public/img/user.jpg')}}" alt="">
                        </div>
                        <p class="font-size-20 blue-grey-700 text-capitalize">{{ Auth::user()->name }}</p>
                        <p class="font-size-20 blue-grey-700 text-capitalize">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
