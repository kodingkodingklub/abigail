@extends('layouts.userlayout')

@section('linkcontent')
    <li class="active">
        <a href="{{ route('shirts') }}">
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
                2
            </span>
        </a>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                         <img src="../uploads/{{$data->gambar}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                   <span class="price-tag">IDR {{ number_format($data->harga,2) }}</span> </br>
                   <span>{{ $data->nama_produk }}</span>
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select Size
                            <select>
                                <option value="small">
                                    Small
                                </option>
                                <option value="medium">
                                    Medium
                                </option>
                                <option value="large">
                                    Large
                                </option>
                               
                            </select>
                        </label>
                        <a href="#" class="button  expanded">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection