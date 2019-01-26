@extends('layouts.main')

@section('title', 'create')

@section('css')
<link rel="stylesheet" href="{{asset('css/sale.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 sale_h2">受注新規登録</h2>
@endsection

@section('content')
  <table class="table table-hover table_sale">
    <form action="{{url('sale')}}/store" method="post">
    {{csrf_field()}}
    <thead>
      <tr>
        <th>受注日</th>
        <th>顧客名</th>
        <th>登録ボタン</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php $today = \Carbon\Carbon::now(); ?>
          {{Form::selectRange('year', 2019, 2029, intval($today->year))}}年
          {{Form::selectRange('month', 1, 12, intval($today->month))}}月
          {{Form::selectRange('day', 1, 31, intval($today->day))}}日
        </td>
        <td>
          <select name="customer_no">
            @foreach($customers as $customer)
              <option value="{{$customer->customer_no}}">{{$customer->customer_name}}</option>
            @endforeach
          </select>
        </td>
        <td><input type="submit" value="登録"></td>
      </tr>
    </tbody>
    </form>
  </table>
@endsection
