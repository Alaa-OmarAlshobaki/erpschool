<?php

use Illuminate\Database\Seeder;
use App\Models\position;
class positionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(position ::class, 10)->create();
    }
}
