<?php
use Illuminate\Database\Seeder;

class EquipeMembresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $equipe2017 = new AppEquipe();
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
