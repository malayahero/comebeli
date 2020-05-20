@extends('layouts.admin.master')
@section('content')
		@foreach($product as $products)
		<ul><li><a href="/admin/product/{{$products->id}}">{{ $products->product_name }}</a></li></ul>
		@endforeach
@endsection