<?php

use Illuminate\Database\Seeder;
use App\Models\Attendes;

class AttendesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Attendes::Class,10)->create();
    }
}
