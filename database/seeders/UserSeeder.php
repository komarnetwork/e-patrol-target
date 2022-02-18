<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      //
      // Seeder User
      User::create([
         'name' => 'komarudin',
         'username' => 'komarudin',
         'email' => 'komar.network@gmail.com',
         'is_admin' => true,
         'email_verified_at' => now(),
         'password' => bcrypt('secret'),
         'remember_token' => Str::random(10)
      ]);

      User::factory(3)->create();
   }
}
