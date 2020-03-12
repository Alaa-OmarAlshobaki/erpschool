<?php

use Illuminate\Database\Seeder;
use App\Models\Profession ;
class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profession ::class, 10)->create();
    }
}
