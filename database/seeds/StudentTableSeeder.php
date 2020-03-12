<?php
use App\Models\Semester;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Student::class, 20)->create();
    }
}
