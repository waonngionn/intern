@extends('layouts.main')

@section('title', 'index')

@section('css')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 product_h2">商品表</h2>
<a href="{{url('product')}}/create/">新規登録</a>
@endsection

@section('content')
  <table class="table table-hover table_product">
    <tr>
      <th>商品番号</th>
      <th>商品名</th>
      <th>単価</th>
      <th>編集画面へ</th>
    </tr>
    @foreach($products as $product)
      <tr>
        <td>{{$product->product_no}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->product_cost}}</td>
        <td><a href="{{url('product')}}/edit/{{$product->product_no}}">編集画面へ</a></td>
      </tr>
    @endforeach
  </table>
@endsection
