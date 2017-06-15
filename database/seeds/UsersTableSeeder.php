<?php

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
      $this->call(ACLSeeder::class);
      $this->call(PostsTableSeeder::class);
      $this->call(CommentsTableSeeder::class);
    }
}
