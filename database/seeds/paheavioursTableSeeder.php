<?php

use Illuminate\Database\Seeder;
use App\Models\pehaviour;
class paheavioursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(pehaviour::Class,10)->create();
    }
}
