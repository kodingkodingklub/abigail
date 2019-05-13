@extends('layouts.userlayout')

@section('linkcontent')
    <li class="active">
        <a>
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
            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
            </i>
            CART
            <span class="alert badge">
                {{Cart::count()}}
            </span>
        </a>
    </li>
@endsection

@section('content')
    <div class="row">
        @foreach($data as $dt)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{ route('cart.edit', $dt->id) }}" class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="uploads/{{$dt->gambar}}"/>
                    </a>
                </div>
                <a href="#">
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
    <div style="font-size: 50px">
        <center>{{ $data->links() }}</center>
    </div>
@endsection