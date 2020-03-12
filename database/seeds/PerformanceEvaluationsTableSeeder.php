<?php

use Illuminate\Database\Seeder;
use App\Models\Performance_Evaluation;
class PerformanceEvaluationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Performance_Evaluation::class,10)->create();
    }
}
