<?php

use Illuminate\Database\Seeder;
use App\Models\Timetable;
class TimetableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Timetable::class,10)->create();
    }
}
