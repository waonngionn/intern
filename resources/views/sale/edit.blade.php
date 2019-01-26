@extends('layouts.main')

@section('title', 'edit')

@section('css')
<link rel="stylesheet" href="{{asset('css/sale.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 sale_h2">受注編集</h2>
<a href="{{url('sale')}}/create/">新規登録</a>
@endsection

@section('content')
<form action="{{url('sale')}}/update/{{$sales[0]->sale_no}}" method="post">
{{csrf_field()}}
<table class="table table-hover table_sale">
    <tr>
        <th>受注番号</th>
        <th>受注日</th>
        <th>顧客名</th>
        <th>更新ボタン</th>
        <th>削除ボタン</th>
    </tr>
    <tbody>
    @foreach($sales as $sale)
          <tr>
              <td>
                <label>{{$sale->sale_no}}</label>
                <input type="hidden" name="sale_no" value="{{$sale->sale_no}}">
              </td>
              <td>
                {{Form::selectRange('year', 2019, 2029, intval($sale_day['year']))}}年
                {{Form::selectRange('month', 1, 12, intval($sale_day['month']))}}月
                {{Form::selectRange('day', 1, 31, intval($sale_day['day']))}}日
              </td>
              <td>
                <select name="customer_no">
                @foreach($customers as $customer)
                  <option value="{{$customer->customer_no}}" @if($sale->customer_no == $customer->customer_no) selected @endif>{{$customer->customer_name}}</option>
                @endforeach
                </select>
              </td>
              <td>
                <input type="submit" value="更新">
              </td>
              <td>
                <a href="{{url('sale')}}/destroy/{{$sale->sale_no}}">削除</a>
              </td>
          </tr>
    @endforeach
    </tbody>
</table>
</form>
<table class="table table-hover table_salesdata">
  <thead>
    <tr>
      <th>受注番号</th>
      <th>商品番号</th>
      <th>数量</th>
    </tr>
  </thead>
  <tbody>
    @foreach($salesdatas as $salesdata)
    <tr>
      <td>{{$salesdata->sale_no}}</td>
      <td>{{$salesdata->product_name}}</td>
      <td>{{$salesdata->product_cnt}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
