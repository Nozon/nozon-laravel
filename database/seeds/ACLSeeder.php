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

        $user1 = new App\Models\Utilisateur();
        $user1->email = 'sebastien.guex@heig-vd.ch';
        $user1->motDePasse = bcrypt('123456');
        $user1->save();
        //Creation des groupes
        $admin = new \App\Models\Groupe();
        $admin->name = 'admin';
        $admin->save();
        $moderator = new \App\Models\Groupe();
        $moderator->name = 'moderateur';
        $moderator->save();
    }
}
