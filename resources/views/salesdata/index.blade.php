@extends('layouts.main')

@section('title', 'index')

@section('css')
<link rel="stylesheet" href="{{asset('css/salesdata.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 salesdata_h2">受注明細表</h2>
<a href="{{url('salesdata')}}/create/">新規登録</a>
@endsection

@section('content')
  <table class="table table-hover table_salesdata">
    <tr>
      <th>受注番号</th>
      <th>商品番号</th>
      <th>数量</th>
      <th>編集画面へ</th>
    </tr>
    @foreach($salesdatas as $salesdata)
      <tr>
        <td>{{$salesdata->sale_no}}</td>
        <td>{{$salesdata->product_name}}</td>
        <td>{{$salesdata->product_cnt}}</td>
        <td><a href="{{url('salesdata')}}/edit/{{$salesdata->salesdataid}}">編集画面へ</a></td>
      </tr>
    @endforeach
  </table>
@endsection

@section('new_content')
<a href="{{url('salesdata')}}/create/">新規登録</a>
@endsection
