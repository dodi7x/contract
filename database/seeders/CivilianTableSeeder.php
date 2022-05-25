<?php

namespace Database\Seeders;

use App\Models\Civi;
use Illuminate\Database\Seeder;

class CivilianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $civilian = Civi::create([
            'name' => "Mohamed Ali Adam Omar",
            'date_of_birth' => date('2022/5/4'),
            'id_number' => 11223344,
            'address' => "sudan in Khartoum",
            'Profession' => "programmer",
            'law_number' => 1,
        ]);
        $civilian = Civi::create([
            'name' => "Malaz Ahmed Mohamed Hani",
            'date_of_birth' => date('1996/6/4'),
            'id_number' => 12345678,
            'address' => "sudan in Khartoum",
            'Profession' => "Designer",
            'law_number' => 1,
        ]);
    }
}
