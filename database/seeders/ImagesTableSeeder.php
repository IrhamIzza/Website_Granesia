<?php
namespace Database\Seeders;
use App\Images;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $images = array(
            array("name" => "belanja1.png", "imageable_id" => 1, "imageable_type" => "App\Product"),
            array("name" => "belanja1.png", "imageable_id" => 1, "imageable_type" => "App\Product"),
            array("name" => "46158.png", "imageable_id" => 1, "imageable_type" => "App\Product"),
            array("name" => "belanja2.png", "imageable_id" => 2, "imageable_type" => "App\Product"),
            array("name" => "belanja2.png", "imageable_id" => 2, "imageable_type" => "App\Product"),
            array("name" => "963249.jpg", "imageable_id" => 2, "imageable_type" => "App\Product"),
            array("name" => "belanja3.png", "imageable_id" => 3, "imageable_type" => "App\Product"),
            array("name" => "belanja3.png", "imageable_id" => 3, "imageable_type" => "App\Product"),
            array("name" => "963249.jpg", "imageable_id" => 3, "imageable_type" => "App\Product"),
            array("name" => "belanja4.png", "imageable_id" => 4, "imageable_type" => "App\Product"),
            array("name" => "belanja4.png", "imageable_id" => 4, "imageable_type" => "App\Product"),
            array("name" => "963249.jpg", "imageable_id" => 4, "imageable_type" => "App\Product"),
            array("name" => "belanja5.png", "imageable_id" => 5, "imageable_type" => "App\Product"),
            array("name" => "belanja5.png", "imageable_id" => 5, "imageable_type" => "App\Product"),
            array("name" => "963249.jpg", "imageable_id" => 5, "imageable_type" => "App\Product"),
            array("name" => "belanja6.png", "imageable_id" => 6, "imageable_type" => "App\Product"),
            array("name" => "belanja6.png", "imageable_id" => 6, "imageable_type" => "App\Product"),
            array("name" => "963249.jpg", "imageable_id" => 6, "imageable_type" => "App\Product"),
        );

        foreach ($images as $image)
        {
            Images::create($image);
        }
    }
}
