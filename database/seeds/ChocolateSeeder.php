<?php

use Illuminate\Database\Seeder;
use App\Chocolate;

class ChocolateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Chocolate::class, 100) -> create();
    }
}
