@extends('layouts.userlayout')

@section('linkcontent')
    <li>
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
        <a href="#">
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
<div class="row"><br>
	<h3>Cart Items</h3>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nama Produk</th>
				<th>Harga</th>
				<th>Qty</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cartItems as $cartItem)
			<tr>
				<td>{{ $cartItem->name }}</td>
				<td>{{ $cartItem->price }}</td>
				<td width="70px">
					<form action="{{route('cart.update', $cartItem->rowId)}}" method="POST">
						{{csrf_field()}}
						{{method_field('PATCH')}}
						<input type="number" min="1" minlength="1" name="qty" value="{{ $cartItem->qty }}">
				</td>
				<td>
						<input style="float: left" type="submit" class="button success small" value="Ok">
					</form>
					<form action="{{route('cart.destroy', $cartItem->rowId)}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<input type="submit" class="button small alert" value="Delete">
					</form>
				</td>
			</tr>
			@endforeach
			<tr>
				<td></td>
				<td>Grand Total: Rp.{{Cart::subTotal()}}</td>
				<td>Items: {{Cart::count()}}</td>
				<td></td>
			</tr>
		</tbody>
	</table>

	<a href="#" class="button">Checkout</a>
</div>
@endsection
