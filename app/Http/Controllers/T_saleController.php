<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\T_sale;
use App\T_salesdata;
use App\T_customer;

class T_saleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = DB::select('select * from t_sales inner join t_customers on t_sales.customer_no = t_customers.customer_no order by t_sales.sale_no');
        return view('sale/index', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $customers = T_customer::all();
      return view('sale/create', ['customers' => $customers]);
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
        $date = $param['year'] ."-". $param['month'] ."-". $param['day'];
        $param['sale_day'] = $date;
        unset($param['year']);
        unset($param['month']);
        unset($param['day']);
        unset($param['_token']);
        Log::info($param);
        DB::insert('insert into t_sales set sale_day = :sale_day, customer_no = :customer_no', $param);
        $id = DB::getPdo()->lastInsertId();
        Log::info($id);
        return redirect('/salesdata/create/' . $id);
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
      $param = array('sale_no' => $id);
      $sales = DB::select('select * from t_sales inner join t_customers on t_sales.customer_no = t_customers.customer_no where sale_no = :sale_no', $param);
      $sale_day = array(
        'year'  => substr($sales[0]->sale_day, 0, 4),
        'month' => substr($sales[0]->sale_day, 5, 2),
        'day'   => substr($sales[0]->sale_day, 8, 2)
      );

      $customers = DB::select('select * from t_customers');

      $salesdatas = DB::select('select * from t_salesdatas inner join t_products on t_salesdatas.product_no = t_products.product_no where sale_no = :sale_no', $param);

      Log::info($sale_day);

      return view('sale/edit', [
        'sales' => $sales,
        'sale_day' => $sale_day,
        'customers' => $customers,
        'salesdatas' => $salesdatas,
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
        $param['sale_day'] = $param['year'] . "-" . $param['month'] . "-" . $param['day'];
        unset($param['_token']);
        unset($param['year']);
        unset($param['month']);
        unset($param['day']);
        Log::info($param);
        DB::update('update t_sales set sale_day = :sale_day, customer_no = :customer_no where sale_no = :sale_no', $param);
        return redirect('/sale');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      T_sale::where('sale_no', $id)->delete();
      T_salesdata::where('sale_no', $id)->delete();
      return redirect('sale/');
    }
}
