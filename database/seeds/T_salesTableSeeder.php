<?php

use Illuminate\Database\Seeder;

class T_salesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'sale_day' => '2019-01-01'
        ];
        DB::table('t_sales')->insert('$param');
        $param = [
            'sale_day' => '2019-01-02'
        ];
        DB::table('t_sales')->insert('$param');
        $param = [
            'sale_day' => '2019-01-03'
        ];
        DB::table('t_sales')->insert('$param');
    }
}
