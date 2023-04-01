<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama_petugas' => 'Amd',
                'username' => 'admin.com',
                'password' => bcrypt('123456789'),
                'id_level' => 1,
            ]
        ];
        foreach ($users as $key => $user) {
            Petugas::create($user);
        }
    }
}
