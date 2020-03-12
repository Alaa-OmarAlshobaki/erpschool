<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GuardianTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(InstitutionTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(AcademicTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(ProfessionTableSeeder::class);
      $this->call(EmployeeTableSeeder::class);
        $this->call(positionTableSeeder::class);
        $this->call(AttendesTableSeeder::class);
        $this->call(SyllabusesTableSeeder::class);
        $this->call(TimetableTableSeeder::class);
        $this->call(paheavioursTableSeeder::class);
        $this->call(ActivititiesTableSeeder::class);
        $this->call(ExamTableSeeder::class);
        $this->call(MarksTableSeeder::class);
        $this->call(PerformanceEvaluationsTableSeeder::class);
        $this->call(SemestersTableSeeder::class);
        $this->call(ActivityschoolTableSeeder::class);
    
    
    }
}
