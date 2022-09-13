<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
        'name' => Str::random(),
        'image_url'=> Str::random(),
        'sku'=> Str::random(),
        'price'=> 90.99,
        'category'=> Str::random(),
        'active'=> '1'

        ]);
    }
}
