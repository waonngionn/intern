@extends('layouts.main')

@section('title', 'create')

@section('css')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 product_h2">商品新規登録</h2>
@endsection

@section('content')
  <table class="table table_product">
    <form action="{{url('product')}}/store" method="post">
    {{csrf_field()}}
    <thead>
      <tr>
        <th>商品名</th>
        <th>単価</th>
        <th>登録ボタン</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="product_name"></td>
        <td><input type="text" name="product_cost"></td>
        <td><input type="submit" value="登録"></td>
      </tr>
    </tbody>
    </form>
  </table>
@endsection
