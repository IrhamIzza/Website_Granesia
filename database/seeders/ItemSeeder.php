<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item=[
            [
                'item_name'=> 'Monstera Deliciosa',
                'category_id'=>1,
                'picture'=>'abc',
                'price'=>10000,
                'quantity'=> 10,
                'note' => 'bunga yang bagus ngab'
            ],
            [
                'item_name'=> 'Sirih Belanda',
                'category_id'=>2,
                'picture'=>'abc',
                'price'=>10000,
                'quantity'=> 10,
                'note' => 'bunga yang bagus ngab'
            ]
            ];
            foreach ($item as $key => $value) {
                DB::table('item')->insert([
                    'item_name' => $value['item_name'],
                    'category_id' => $value['category_id'],
                    'picture' => $value['picture'],
                    'price' => $value['price'],
                    'quantity' => $value['quantity'],
                    'note' => $value['note'],
                ]);
    
            }
    }
}
