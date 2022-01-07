<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Product();

        $producto->name = 'PC';
        $producto->price = '7500.50';
        $producto->qty = '5';

        $producto->save();

        $producto2 = new Product();

        $producto2->name = 'LapTop';
        $producto2->price = '15500.50';
        $producto2->qty = '2';

        $producto2->save();

        $producto3 = new Product();

        $producto3->name = 'TV';
        $producto3->price = '12200.20';
        $producto3->qty = '15';

        $producto3->save();

        $producto4 = new Product();

        $producto4->name = 'Table';
        $producto4->price = '800.60';
        $producto4->qty = '9';

        $producto4->save();

        $producto5 = new Product();

        $producto5->name = 'Teclado';
        $producto5->price = '150.00';
        $producto5->qty = '35';

        $producto5->save();


        $producto6 = new Product();

        $producto6->name = 'PC';
        $producto6->price = '7500.50';
        $producto6->qty = '5';

        $producto6->save();

        $producto7 = new Product();

        $producto7->name = 'LapTop';
        $producto7->price = '15500.50';
        $producto7->qty = '2';

        $producto7->save();

        $producto8 = new Product();

        $producto8->name = 'TV';
        $producto8->price = '12200.20';
        $producto8->qty = '15';

        $producto8->save();

        $producto9 = new Product();

        $producto9->name = 'Table';
        $producto9->price = '800.60';
        $producto9->qty = '9';

        $producto9->save();

        $producto10 = new Product();

        $producto10->name = 'Teclado';
        $producto10->price = '150.00';
        $producto10->qty = '35';

        $producto10->save();

        $producto11 = new Product();

        $producto11->name = 'PC';
        $producto11->price = '7500.50';
        $producto11->qty = '5';

        $producto11->save();

        $producto12 = new Product();

        $producto12->name = 'LapTop';
        $producto12->price = '15500.50';
        $producto12->qty = '2';

        $producto12->save();

        $producto13 = new Product();

        $producto13->name = 'TV';
        $producto13->price = '12200.20';
        $producto13->qty = '15';

        $producto13->save();

        $producto14 = new Product();

        $producto14->name = 'Table';
        $producto14->price = '800.60';
        $producto14->qty = '9';

        $producto14->save();

        $producto15 = new Product();

        $producto15->name = 'Teclado';
        $producto15->price = '150.00';
        $producto15->qty = '35';

        $producto15->save();

        $producto16 = new Product();

        $producto16->name = 'PC';
        $producto16->price = '7500.50';
        $producto16->qty = '5';

        $producto16->save();

        $producto17 = new Product();

        $producto17->name = 'LapTop';
        $producto17->price = '15500.50';
        $producto17->qty = '2';

        $producto17->save();

        $producto18 = new Product();

        $producto18->name = 'TV';
        $producto18->price = '12200.20';
        $producto18->qty = '15';

        $producto18->save();

        $producto19 = new Product();

        $producto19->name = 'Table';
        $producto19->price = '800.60';
        $producto19->qty = '9';

        $producto19->save();

        $producto20 = new Product();

        $producto20->name = 'Teclado';
        $producto20->price = '150.00';
        $producto20->qty = '35';

        $producto20->save();
        
    }
}
