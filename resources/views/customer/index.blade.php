@extends('layouts.main')

@section('title', 'index')

@section('css')
<link rel="stylesheet" href="{{asset('css/customer.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 customer_h2">顧客表</h2>
<a href="{{url('customer')}}/create/">新規登録</a>
@endsection

@section('content')
  <table class="table table-hover table_customer">
    <tr>
      <th>顧客番号</th>
      <th>顧客名</th>
      <th>編集画面へ</th>
    </tr>
    @foreach($customers as $customer)
      <tr>
        <td>{{$customer->customer_no}}</td>
        <td>{{$customer->customer_name}}</td>
        <td><a href="{{url('customer')}}/edit/{{$customer->customer_no}}">編集画面へ</a></td>
      </tr>
    @endforeach
  </table>
@endsection
