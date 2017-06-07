<?php

use Illuminate\Database\Seeder;

class ACLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*** CLEAN UP ***/
      DB::table('utilisateurs')->truncate();
      DB::table('groupes')->truncate();
      DB::table('groupe_utilisateur')->truncate();
      DB::table('ressources')->truncate();
      DB::table('groupe_ressource')->truncate();

        $user1 = new App\Utilisateur();
        $user1->email = 'john@example.com';
        $user1->motDePasse = '123456';
        $user1->save();
    }
}
