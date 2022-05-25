<?php

namespace Database\Seeders;

use App\Models\datauser;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'super admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('123123')
        ]);
        datauser::create([
            'user_id' => $user->id,
            'civi_id' => 1,
            'address' => "sudanese",
            'phone' => 123456789,
            'id_number' => 12345678,
            'gender' => "male",
        ]);

        $user->attachRole('admin');
    } // end run
}
