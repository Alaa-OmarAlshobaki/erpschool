<?php

use Illuminate\Database\Seeder;
use App\Models\Academic;
class AcademicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Academic::class, 20)->create();
    }
}
