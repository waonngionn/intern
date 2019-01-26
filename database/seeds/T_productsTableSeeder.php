<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class T_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'product_name' => 'personal file',
            'product_cost' => '300'
        ];
        DB::table('t_products')->insert($param);
        $param = [
            'product_name' => 'wonder wall',
            'product_cost' => '100'
        ];
        DB::table('t_products')->insert($param);
    }
}
