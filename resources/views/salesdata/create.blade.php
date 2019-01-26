@extends('layouts.main')

@section('title', 'create')

@section('css')
<link rel="stylesheet" href="{{asset('css/salesdata.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 salesdata_h2">受注明細新規登録</h2>
@endsection

@section('content')
  <table class="table table_salesdata">
    <form action="{{url('salesdata')}}/store" method="post">
    {{csrf_field()}}
    <thead>
      <tr>
        <th>受注番号</th>
        <th>商品番号</th>
        <th>数量</th>
        <th>登録ボタン</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <select name="sale_no">
            @foreach($sales as $sale)
              <option value="{{$sale->sale_no}}" @if($sale_no == $sale->sale_no) selected @endif>{{$sale->sale_no}}</option>
            @endforeach
          </select>
        </td>
        <td>
          <select name="product_no">
            @foreach($products as $product)
              <option value="{{$product->product_no}}">{{$product->product_name}}</option>
            @endforeach
          </select>
        </td>
        <td>
          {{Form::selectRange('product_cnt', 0, 100, '')}}
        </td>
        <td><input type="submit" value="登録"></td>
      </tr>
    </tbody>
    </form>
  </table>
@endsection
