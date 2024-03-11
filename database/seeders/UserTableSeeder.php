<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // id	name	email	phone	image	username	email_verified_at	password	remember_token	created_at	updated_at	

    $admin = User::create([
      'name' => 'Mehedi',
      'email' => 'mjjibon114@gmail.com',
      'phone' => '01873593399',
      'username' => 'jibonbd360',
      'password' => Hash::make('mjjibon114@gmail.com'),
    ]);
  }
}
