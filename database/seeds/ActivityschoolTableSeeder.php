<?php

use Illuminate\Database\Seeder;
use App\Models\ActivitySchool;
class ActivityschoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ActivitySchool::Class,10)->create();
    }
}
