@extends('layouts.app')

<style>
    img {
        width: 40%;
        margin-left: 30%;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('APLIKASI DATA MEMBER INDOMARKET') }} </div>

                <div class="card-body">
                    <img src="https://www.westlondon.com/wp-content/uploads/2016/09/Membership-s417494936376459862_p2_i1_w1600.jpeg"
                        alt="member logo"
                        srcset="https://www.westlondon.com/wp-content/uploads/2016/09/Membership-s417494936376459862_p2_i1_w1600.jpeg">
                    <br><br>
                    <hr>
                    <marquee behavior="" direction="">Selamat Datang Di Aplikasi Data Member IndoMarket | &copy; Nadila
                        Alya Rahmah
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection