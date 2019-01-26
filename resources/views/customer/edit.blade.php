@extends('layouts.main')

@section('title', 'edit')

@section('css')
<link rel="stylesheet" href="{{asset('css/customer.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 customer_h2">顧客編集</h2>
<a href="{{url('customer')}}/create/">新規登録</a>
@endsection

@section('content')
<form action="{{url('customer')}}/update/{{$customer->customer_no}}" method="post">
{{csrf_field()}}
<table class="table table_customer">
    <tr>
        <th>顧客番号</th>
        <th>顧客名</th>
        <th>更新ボタン</th>
        <th>削除ボタン</th>
    </tr>
    <tbody>
          <tr>
              <td>
                <label>{{$customer->customer_no}}</label>
                <input type="hidden" name="customer_no" value="{{$customer->customer_no}}">
              </td>
              <td>
                <input type="text" name="customer_name" value="{{$customer->customer_name}}">
              </td>
              <td>
                <input type="submit" value="更新">
              </td>
              <td>
                <a href="{{url('customer')}}/destroy/{{$customer->customer_no}}">削除</a>
              </td>
          </tr>
    </tbody>
</table>
</form>
@endsection
