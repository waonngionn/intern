@extends('layouts.main')

@section('title', 'edit')

@section('css')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 product_h2">商品編集</h2>
<a href="{{url('product')}}/create/">新規登録</a>
@endsection

@section('content')
<form action="{{url('product')}}/update/{{$product->product_no}}" method="post">
{{csrf_field()}}
<table class="table table_product">
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>単価</th>
        <th>更新ボタン</th>
        <th>削除ボタン</th>
    </tr>
    <tbody>
          <tr>
              <td>
                <label>{{$product->product_no}}</label>
                <input type="hidden" name="product_no" value="{{$product->product_no}}">
              </td>
              <td>
                <input type="text" name="product_name" value="{{$product->product_name}}">
              </td>
              <td>
                <input type="text" name="product_cost" value="{{$product->product_cost}}">
              </td>
              <td>
                <input type="submit" value="更新" class="btn-linky">
              </td>
              <td>
                <a href="{{url('product')}}/destroy/{{$product->product_no}}">削除</a>
              </td>
          </tr>
    </tbody>
</table>
</form>
@endsection
