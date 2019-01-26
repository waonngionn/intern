<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class T_customersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'customer_name' => '日向'
        ];
        DB::table('t_customers')->insert($param);
        $param = [
            'customer_name' => '朝比奈'
        ];
        DB::table('t_customers')->insert($param);
        $param = [
            'customer_name' => '夏井'
        ];
        DB::table('t_customers')->insert($param);
    }
}
