<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'sponge',
            'code'=>'8997004303430',
            'price'=>12999,
          ]);
        Product::create([
            'name'=>'lifebuoy',
            'code'=>'8264889272628',
            'price'=>3599,
          ]);
        Product::create([
            'name'=>'dancow',
            'code'=>'5234553677289',
            'price'=>79700,
          ]);
        Product::create([
            'name'=>'pillows',
            'code'=>'2341567789567',
            'price'=>999,
          ]);
        Product::create([
            'name'=>'le minerial',
            'code'=>'7266358118266',
            'price'=>3699,
          ]);
    }
}
