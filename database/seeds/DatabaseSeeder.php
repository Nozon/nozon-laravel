<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call(ACLSeeder::class);

        $edition2017 = new \App\Models\Edition();
        $edition2017->annee = 2017;
        $edition2017->textePresentation = "Texte de présentation de l'édition";
        $edition2017->texteConcours = "Texte du concours";
        $edition2017->lieu = "Saint-Tropez";
        $edition2017->dateConcours = "2017-09-10";
        $edition2017->save();

        $equipe2017 = new \App\Models\Equipe();
        $equipe2017->nom = "TEAM HEIG 2017";
        $equipe2017->edition_annee = '2017';
        $equipe2017->description ='bléabkiohbeouigheogefh';
        $equipe2017->type = 'principal';
        $equipe2017->save();

        $equipe2017c = new \App\Models\Equipe();
        $equipe2017c->nom = "TEAM HEIG com 2017";
        $equipe2017c->edition_annee = '2017';
        $equipe2017c->description ='dedededededeqwdwefewfwefwefheogefh';
        $equipe2017c->type = 'secondaire';
        $equipe2017c->save();



        Schema::enableForeignKeyConstraints();
    }
}
