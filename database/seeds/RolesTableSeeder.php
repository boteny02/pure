<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        [
          'name' => 'admin',
          'display_name' => 'Admin',
          'description' => 'Admin',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'lecturer',
          'display_name' => 'Lecturer',
          'description' => 'Lecturer',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'student',
          'display_name' => 'Student',
          'description' => 'Student',
          'created_at' => now(),
          'updated_at' => now()
        ],
      ]);
    }
}
