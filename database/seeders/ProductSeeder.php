<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'product 1',
            'price'=>'123',
            'image'=>'product01.png',
            'type' => '1',
            'created_at'=>now(),
            'updated_at'=>now()],
            ['name'=>'product 2',
            'price'=>'123',
            'image'=>'product02.png',
            'type' => '2',
            'created_at'=>now(),
            'updated_at'=>now()],
            ['name'=>'product 3',
            'price'=>'123',
            'image'=>'product03.png',
            'type' => '3',
            'created_at'=>now(),
            'updated_at'=>now()],
            ['name'=>'product 4',
            'price'=>'123',
            'image'=>'product04.png',
            'type' => '1',
            'created_at'=>now(),
            'updated_at'=>now()]
       ]);
    }
}
