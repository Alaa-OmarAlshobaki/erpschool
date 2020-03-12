<?php

use Illuminate\Database\Seeder;
use App\Models\Activity;
class ActivititiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Activity::class,50)->create();
    }
}
