@extends('layouts.admin')

@section('linkcontent')
<li class="mt">
    <a class="active">
        <i class="fa fa-home"></i>
        <span>Home</span>
    </a>
</li>

<li class="sub-menu">
    <a href="{{route('products.index')}}">
        <i class="fa fa-box"></i>
        <span>Produk</span>
    </a>
</li>

<li class="sub-menu">
    <a href="{{route('karyawan.index')}}">
        <i class="fa fa-users"></i>
        <span>Karyawan</span>
    </a>
</li>

<li class="sub-menu">
    <a href="{{route('pengguna.index')}}">
        <i class="fa fa-user"></i>
        <span>Pengguna</span>
    </a>
</li>

<li class="sub-menu">
    <a href="javascript:;">
        <i class="fa fa-list"></i>
        <span>Laporan</span>
    </a>
    <ul class="sub">
        <li><a href="#">Data Kategori</a></li>
        <li><a href="#">Data Pengeluaran</a></li>
    </ul>
</li>
@endsection

@section('content')
<!-- WELCOME-->
<section class="welcome p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-4">Welcome back
                    <span>{{ Auth::user()->name }}!</span>
                </h1>
                <hr class="line-seprate">
            </div>
        </div>
    </div>
</section>
<!-- END WELCOME-->

<!-- STATISTIC-->
<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-body" style="background:linear-gradient(to bottom, rgba(0,0,255,1) 20%, rgba(100, 51, 255, 0.6) 86%, rgba(51, 51, 255, 0.8) 100%);color:white;">
                        <div class="statistic__item statistic__item--green">
                            <span class="desc panel-title">members online</span>
                            <h2 class="number">10,368</h2>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-body" style="background:linear-gradient(to bottom, rgba(255,0,0,1) 20%, rgba(255, 51, 51, 0.6) 86%, rgba(255, 51, 51, 0.8) 100%);color:white">
                        <div class="statistic__item statistic__item--orange">
                            <span class="desc panel-title">items sold</span>
                            <h2 class="number">388,688</h2>
                            <div class="icon">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-body" style="background:linear-gradient(to bottom, rgba(255,200,0,1) 20%, rgba(255, 200, 51, 0.6) 86%, rgba(255, 200, 51, 0.8) 100%);color:ghostwhite;">
                        <div class="statistic__item statistic__item--blue">
                            <span class="desc panel-title">this week</span>
                            <h2 class="number">1,086</h2>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-body" style="background:linear-gradient(to bottom, rgba(0,255,0,1) 20%, rgba(51, 255, 51, 0.6) 86%, rgba(0, 255, 0, 0.8) 100%);color:ghostwhite;">
                        <div class="statistic__item statistic__item--red">
                            <span class="desc panel-title">total earnings</span>
                            <h2 class="number">$1,060,386</h2>
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END STATISTIC-->
@endsection