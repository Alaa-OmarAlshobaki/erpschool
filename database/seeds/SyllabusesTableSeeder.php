<?php

use Illuminate\Database\Seeder;
use App\Models\Syllabuses;

class SyllabusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Syllabuses::Class,10)->create();
    }
}
