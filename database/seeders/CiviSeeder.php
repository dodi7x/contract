<?php

namespace Database\Seeders;

use App\Models\Civi;
use Illuminate\Database\Seeder;

class CiviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Civi::create([
        'name' => 'William Maxwell',
        'date' => '1987-4-4',
        'id_number' => '19226500297',
        'address' => 'sanar',
        'Profession'=>'Student',
        'law_number' => '0',
        
]);

        Civi::create([
        'name' => 'Salma Hayek',
        'date' => '1990-8-6',
        'id_number' => '18188084910',
        'address' => 'aljanina',
        'Profession'=>'employee',
        'law_number' => '0',
        ]);
        
        Civi::create([
        'name' => 'Tommy Lucas',
        'date' => '1985-1-2',
        'id_number' => '19191620344',
        'address' => 'Khartoum',
        'Profession'=>'Lawyer',
        'law_number' => '4253',
        
]);

        Civi::create([
       'name' => 'Ali Daei',
       'date' => '1978-6-4',
       'id_number' => '17137049201',
       'address' => 'aldamir',
       'Profession'=>'Lawyer',
       'law_number' => '3321',
       
]);


    }
}
