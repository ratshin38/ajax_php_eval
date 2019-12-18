<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'Php',
        ]);

        DB::table('skills')->insert([
            'name' => 'JavaScript',
        ]);
        DB::table('skills')->insert([
            'name' => 'Css',
        ]);
        DB::table('skills')->insert([
            'name' => 'Poo',
        ]);
        DB::table('skills')->insert([
            'name' => 'MySQL',
        ]);
        DB::table('skills')->insert([
            'name' => 'Laravel',
        ]);
    }
}
