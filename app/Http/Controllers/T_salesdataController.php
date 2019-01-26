<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\T_salesdata;
use App\T_product;

class T_salesdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesdatas = DB::select('select * from t_salesdatas inner join t_products on t_salesdatas.product_no = t_products.product_no order by t_salesdatas.sale_no');
        Log::info($salesdatas);
        return view('salesdata/index', [
          'salesdatas' => $salesdatas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($sale_no = null)
    {
      $salesdatas = DB::select('select * from t_salesdatas inner join t_products on t_salesdatas.product_no = t_products.product_no');
      $sales      = DB::select('select * from t_sales');
      $products   = DB::select('select * from t_products');
      $sale_no    = $sale_no == null ? 0 : $sale_no;
      return view('salesdata/create', [
        'salesdatas' => $salesdatas,
        'sales' => $sales,
        'products' => $products,
        'sale_no' => $sale_no,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->all();
        Log::info($param);
        unset($param['product_name']);
        unset($param['product_cost']);
        unset($param['_token']);
        DB::insert('insert into t_salesdatas set sale_no = :sale_no, product_no = :product_no, product_cnt = :product_cnt', $param);
        return redirect('/sale');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $param = array('salesdataid' => $id);
      $salesdatas = DB::select('select * from t_salesdatas inner join T_products on t_salesdatas.product_no = T_products.product_no where T_salesdatas.salesdataid = :salesdataid', $param);

      $products = DB::select('select * from t_products');

      Log::info($salesdatas);

      return view('salesdata/edit', [
        'salesdata' => $salesdatas[0],
        'products' => $products,
        'sale_no' => $id,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $param = $request->all();
        unset($param['_token']);
        Log::info($param);
        DB::update('update t_salesdatas set product_no = :product_no, product_cnt = :product_cnt where salesdataid = :salesdataid', $param);
        return redirect('/salesdata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      T_salesdata::where('salesdataid', $id)->delete();
      return redirect('salesdata/');
    }
}
