<?php

use Illuminate\Database\Seeder;

class SkillStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill_students')->insert([
            'student_id' => 1,
            'skill_id' => 1
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 1,
            'skill_id' => 6
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 1,
            'skill_id' => 5
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 2,
            'skill_id' => 1
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 2,
            'skill_id' => 2
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 3,
            'skill_id' => 1
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 3,
            'skill_id' => 2
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 3,
            'skill_id' => 3
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 4,
            'skill_id' => 1
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 4,
            'skill_id' => 2
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 4,
            'skill_id' => 4
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 5,
            'skill_id' => 4
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 5,
            'skill_id' => 5
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 5,
            'skill_id' => 6
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 6,
            'skill_id' => 4
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 6,
            'skill_id' => 5
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 6,
            'skill_id' => 6
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 7,
            'skill_id' => 1
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 7,
            'skill_id' => 2
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 7,
            'skill_id' => 6
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 8,
            'skill_id' => 4
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 8,
            'skill_id' => 1
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 8,
            'skill_id' => 2
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 9,
            'skill_id' => 3
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 9,
            'skill_id' => 6
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 9,
            'skill_id' => 5
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 10,
            'skill_id' => 4
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 10,
            'skill_id' => 1
        ]);
        DB::table('skill_students')->insert([
            'student_id' => 10,
            'skill_id' => 2
        ]);
    }
}


