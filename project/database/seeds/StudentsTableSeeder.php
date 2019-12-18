<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'firstname' => 'Adam',
            'lastname'=> 'Angoune',
            'email' => 'a.agoune.@gmail.com',
            'age' => '26',
            'phone_number'=> '0632781456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Soline',
            'lastname'=> 'Molova',
            'email' => 's.molova.@gmail.com',
            'age' => '32',
            'phone_number'=> '0645481456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Orkun',
            'lastname'=> 'Selçuk',
            'email' => 'o.selçuk.@gmail.com',
            'age' => '34',
            'phone_number'=> '0674881456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Quentin',
            'lastname'=> 'Dessartine',
            'email' => 'q.dessartine.@gmail.com',
            'age' => '29',
            'phone_number'=> '0634561456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Norhen',
            'lastname'=> 'Wachani',
            'email' => 'n.wachani.@gmail.com',
            'age' => '28',
            'phone_number'=> '0623681456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Oceane',
            'lastname'=> 'Bellardi',
            'email' => 'o.bellardi.@gmail.com',
            'age' => '32',
            'phone_number'=> '0669381456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Benoît',
            'lastname'=> 'Perus',
            'email' => 'b.perus.@gmail.com',
            'age' => '31',
            'phone_number'=> '0635871456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Quentin',
            'lastname'=> 'Palmer',
            'email' => 'q.palmer.@gmail.com',
            'age' => '22',
            'phone_number'=> '0632331456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Lasmy',
            'lastname'=> 'Rathipanya',
            'email' => 'l.rathipanya.@gmail.com',
            'age' => '27',
            'phone_number'=> '0611781456',
        ]);
        DB::table('students')->insert([
            'firstname' => 'Elisabeth',
            'lastname'=> 'Hoarau',
            'email' => 'e.hoarau.@gmail.com',
            'age' => '29',
            'phone_number'=> '0632781447',
        ]);
    }
}
