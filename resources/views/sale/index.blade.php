@extends('layouts.main')

@section('title', 'index')

@section('css')
<link rel="stylesheet" href="{{asset('css/sale.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 sale_h2">受注表</h2>
<a href="{{url('sale')}}/create/">新規登録</a>
@endsection

@section('content')
  <table class="table table-hover table_sale">
    <tr>
      <th>受注番号</th>
      <th>受注日</th>
      <th>顧客名</th>
      <th>編集画面へ</th>
    </tr>
    @foreach($sales as $sale)
      <tr>
        <td>{{$sale->sale_no}}</td>
        <td>{{$sale->sale_day}}</td>
        <td>{{$sale->customer_name}}</td>
        <td><a href="{{url('sale')}}/edit/{{$sale->sale_no}}">編集画面へ</a></td>
      </tr>
    @endforeach
  </table>
@endsection
