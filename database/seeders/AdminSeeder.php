<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new \App\Models\User;
        $user1->name = "Admincong";
        $user1->email= "angelcantik@mail.com";
        $user1->password = \Hash::make("123");
        $user1->level = "admin";
        $user1->save();
        $this->command>info("Admin ditambahkan");

        $user1 = new \App\Models\User;
        $user1->name = "Admin2";
        $user1->email= "angelbau@gmail.com";
        $user1->password = \Hash::make("123");
        $user1->level = "admin";
        $user1->save();
        $this->command>info("Admin ditambahkan");
    }
}
