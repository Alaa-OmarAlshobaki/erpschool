<?php

use Illuminate\Database\Seeder;
use App\Models\Semester;
class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Semester::class,10)->create();
    }
}
