@extends('layouts.main')

@section('title', 'create')

@section('css')
<link rel="stylesheet" href="{{asset('css/customer.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 customer_h2">顧客新規登録</h2>
@endsection

@section('content')
  <table class="table table_customer">
    <form action="{{url('customer')}}/store" method="post">
    {{csrf_field()}}
    <thead>
      <tr>
        <th>顧客名</th>
        <th>登録ボタン</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="customer_name"></td>
        <td><input type="submit" value="登録"></td>
      </tr>
    </tbody>
    </form>
  </table>
@endsection
