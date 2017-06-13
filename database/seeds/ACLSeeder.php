<?php

namespace App\Models;

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

        $user1 = new App\Models\Utilisateur();
        $user1->email = 'john@example.com';
        $user1->motDePasse = bcrypt('123456');
        $user1->save();
        //Creation des groupes
        $admin = new Groupe();
        $admin->name = 'admin';
        $admin->save();

        $moderator = new Groupe();
        $moderator->name = 'moderateur';
        $moderator->save();

        $equipe2017 = new Equipe();
        $equipe2017->nom = "TEAM HEIG 2017";
        $equipe2017->edition_annee = '2017';
        $equipe2017->description ='bléabkiohbeouigheogefh';
        $equipe2017->type = 'principal';
        $equipe2017->save();

        $equipe2017c = new Equipe();
        $equipe2017c->nom = "TEAM HEIG com 2017";
        $equipe2017c->edition_annee = '2017';
        $equipe2017c->description ='dedededededeqwdwefewfwefwefheogefh';
        $equipe2017c->type = 'secondaire';
        $equipe2017c->save();

    }
}
