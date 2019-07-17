<?php

use Illuminate\Database\Seeder;
use App\Autor;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        factory(Autor::class, 50 )->create();
    }
}
