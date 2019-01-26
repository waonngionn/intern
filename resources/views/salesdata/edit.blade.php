@extends('layouts.main')

@section('title', 'edit')

@section('css')
<link rel="stylesheet" href="{{asset('css/salesdata.css')}}">
@endsection

@section('new_content')
<h2 class="display-5 salesdata_h2">受注明細編集</h2>
<a href="{{url('salesdata')}}/create/">新規登録</a>
@endsection

@section('content')
<form action="{{url('salesdata')}}/update/{{$salesdata->salesdataid}}" method="post">
{{csrf_field()}}
<table class="table table_salesdata">
    <tr>
        <th>受注番号</th>
        <th>商品名</th>
        <th>数量</th>
        <th>更新ボタン</th>
        <th>削除ボタン</th>
    </tr>
    <tbody>
          <tr>
              <td>
                <label>{{$salesdata->sale_no}}</label>
                <input type="hidden" name="salesdataid" value="{{$salesdata->salesdataid}}">
              </td>
              <td>
                <select name="product_no">
                  @foreach($products as $product)
                    <option value="{{$product->product_no}}" @if($salesdata->product_no == $product->product_no) selected @endif>{{$product->product_name}}</option>
                  @endforeach
                </select>
              </td>
              <td>
                {{Form::selectRange('product_cnt', 0, 100, $salesdata->product_cnt)}}
              </td>
              <td>
                <input type="submit" value="更新">
              </td>
              <td>
                <a href="{{url('salesdata')}}/destroy/{{$salesdata->salesdataid}}">削除</a>
              </td>
          </tr>
    </tbody>
</table>
</form>
@endsection
