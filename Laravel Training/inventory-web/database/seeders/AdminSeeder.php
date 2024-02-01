<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new \App\Models\User; //memanggil model user yang ada di folder app
        $user->name = 'Super Admin Lagi'; //untuk menambahkan data name
        $user->username = 'admin2'; //untuk menambahkan data username
        $user->email = 'admin2@test.com'; //untuk menambahkan data email
        $user->password = 'asdasdasd'; //untuk password, Hash berguna untuk generate password ter-enkripsi
        $user->role = 'admin'; //untuk menambahkan role sebagai admin
        $user->save(); //function save() digunakan untuk menyimpan nilai yang diinputkan

    }
}
