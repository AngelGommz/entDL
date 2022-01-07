<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();

        $usuario->email = "admin@digitalife.com.mx";
        $usuario->password = "digitalife";

        $usuario->save();

        $this->call(ProductsSeed::class);
        
    }
}
