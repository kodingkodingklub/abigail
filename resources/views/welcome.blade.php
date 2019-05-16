@extends('layouts.userlayout')

@section('linkcontent')
    <li>
        <a href="{{route('shirts')}}">
            SHIRTS
        </a>
    </li>
    <li>
        <a href="#">
            CONTACT
        </a>
    </li>
    <li>
        <a href="{{ route('cart.index') }}">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            CART
            <span class="alert badge">
                {{Cart::count()}}
            </span>
        </a>
    </li>
@endsection

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/><br/><br/><br/>
        <h2 >
            <strong>
                Hey! Welcome to Abigail&rsquo;s Store
            </strong>
        </h2>
        <br>
        <a href="shirts.html"><button class="button large">Check out My Shirts</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
         <h2 style="color: black">
            Abigail&rsquo;s Latest Shirts
        </h2>
    </div>
   
    <!-- Latest SHirts -->
    <div class="row">
        @foreach($data as $dt)
        <div class="small-6 medium-3 large-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{ route('shirt-detail', $dt->id) }}" class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="{{ route('shirt-detail', $dt->id) }}">
                        <img src="uploads/{{$dt->gambar}}"/>
                    </a>
                </div>
                <a href="{{ route('shirt-detail', $dt->id) }}">
                    <h3>
                        {{ $dt->nama_produk }}
                    </h3>
                </a>
                <h5>
                    IDR. {{ number_format($dt->harga,2) }}
                </h5>
            </div>
        </div>             
        @endforeach
    </div>
@endsection
