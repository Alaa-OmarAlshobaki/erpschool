<?php

use Illuminate\Database\Seeder;
use App\Models\Classes;
class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Classes::Class,12)->create();
    }
}
