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
                  <div class="statistic__item statistic__item--green">
                      <h2 class="number">10,368</h2>
                      <span class="desc">members online</span>
                      <div class="icon">
                          <i class="zmdi zmdi-account-o"></i>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="statistic__item statistic__item--orange">
                      <h2 class="number">388,688</h2>
                      <span class="desc">items sold</span>
                      <div class="icon">
                          <i class="zmdi zmdi-shopping-cart"></i>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="statistic__item statistic__item--blue">
                      <h2 class="number">1,086</h2>
                      <span class="desc">this week</span>
                      <div class="icon">
                          <i class="zmdi zmdi-calendar-note"></i>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="statistic__item statistic__item--red">
                      <h2 class="number">$1,060,386</h2>
                      <span class="desc">total earnings</span>
                      <div class="icon">
                          <i class="zmdi zmdi-money"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- END STATISTIC-->
@endsection
