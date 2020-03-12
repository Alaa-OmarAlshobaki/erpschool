<?php

use Illuminate\Database\Seeder;
use App\Models\Institution;
class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Institution::class, 1)->create();
    }
}
