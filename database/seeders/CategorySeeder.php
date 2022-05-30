<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryproduct=['flower','tools','seed'];
        $categorystatus=['menunggu_pembayaran','sudah_dikirim','belum_dikirim'];
        foreach ($categoryproduct as $key => $value) {
            DB::table('category')->insert([
                'name' => $value,
                'label'=> ucfirst($value),
            ]);
        }
        foreach ($categorystatus as $key => $value) {
            DB::table('category')->insert([
                'name' => $value,
                'label'=> ucfirst($value),
            ]);

        }
    }
}