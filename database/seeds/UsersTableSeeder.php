<?php

use App\Models\User;
use App\Role;
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
      $admin = Role::where('name', 'admin')->first();
      $lecturer = Role::where('name', 'lecturer')->first();
      $student = Role::where('name', 'student')->first();

      $userAdmin = User::create([
        'name' => 'Admin',
        'email' => 'admin@pure.com',
        'password' => bcrypt('password'),
        'email_verified_at' => now()
      ]);
      $userAdmin->attachRole($admin);

      $userLecturer = User::create([
        'name' => 'Lecturer',
        'email' => 'lecturer@pure.com',
        'password' => bcrypt('password'),
        'email_verified_at' => now()
      ]);
      $userLecturer->attachRole($lecturer);

      $userStudent = User::create([
        'name' => 'Student',
        'email' => 'student@pure.com',
        'password' => bcrypt('password'),
        'email_verified_at' => now()
      ]);
      $userStudent->attachRole($lecturer);
    }
}
