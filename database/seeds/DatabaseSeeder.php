<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class, 6)->create();
        factory(\App\Categoria::class, 6)->create();
        factory(\App\Producto::class, 20)->create();
    }
}