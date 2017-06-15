<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        
            DB::table('utilisateurs')->truncate();
            DB::table('groupes')->truncate();
            DB::table('groupe_utilisateur')->truncate();
            DB::table('ressources')->truncate();
            DB::table('groupe_ressource')->truncate();
            DB::table('editions')->truncate();
            DB::table('equipes')->truncate();
            DB::table('medias')->truncate();
            DB::table('membres')->truncate();
            DB::table('presses')->truncate();
            DB::table('profils')->truncate();
            DB::table('publications')->truncate();
            DB::table('recompenses')->truncate();
            DB::table('sponsors')->truncate();
            DB::table('edition_sponsor')->truncate();
        
            DB::table('editions')->insert([
                'annee' => '2016',
                'textePresentation' => 'Bienvenue à tous, 2016 c bien',
                'lieu' => 'Bora Bora',
                'dateConcours' => '2016-06-06',
                'texteConcours' => 'Ce concours sannonce comme un concours',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('editions')->insert([
                'annee' => '2015',
                'textePresentation' => 'Bienvenue à tous, 2015 c mieux',
                'lieu' => 'Bora Bora',
                'dateConcours' => '2016-06-05',
                'texteConcours' => 'Mais ce concours était mieux quand même',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            
            DB::table('equipes')->insert([
                'nom' => 'Schlaguitude',
                'description' => 'On aime autant les bateaux que Kostic les enfants',
                'type' => 'secondaire',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('equipes')->insert([
                'nom' => 'Geekissime',
                'description' => 'Sens-nous et tu sauras',
                'type' => 'principal',
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            
            DB::table('medias')->insert([
                'url' => 'http://www.rts.ch',
                'titre' => 'unePhoto',
                'description' => 'une description',
                'type' => 'photo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('medias')->insert([
                'url' => 'http://www.google.ch',
                'titre' => 'site',
                'description' => 'une description',
                'type' => 'video',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            
            DB::table('membres')->insert([
                'nom' => 'Jean',
                'prenom' => 'Jean',
                'email' => 'unEmail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Jeanne',
                'prenom' => 'Jeanne',
                'email' => 'jeannejeanne@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
                
                
                
                
            DB::table('presses')->insert([
                'url' => 'http://www.google.ch',
                'titre' => 'Titre du site',
                'description' => 'une description',
                'date' => '1901-11-01',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
                
            DB::table('presses')->insert([
                'url' => 'http://www.eurosport.fr',
                'titre' => 'Titre du site',
                'description' => 'une description',
                'date' => '2002-12-12',
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
                
                 
            DB::table('profils')->insert([
                'fonction' => 'Enjailleur',
                'description' => 'Mon devoir est de raconter un minimum de 3 blagues moyennes par tranche de 5 heures',
                'departement' => 'TIC',
                'anneeEtude' => '1',
                'membre_id' => '1',
                'equipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                
                ]);
                
            DB::table('profils')->insert([
                'fonction' => 'Gars casse couille',
                'description' => 'Mon devoir est de rappeler aux gens leur manque dengagement' ,
                'departement' => 'Cirque',
                'anneeEtude' => '798', 
                'membre_id' => '2',
                'equipe_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
                
            
            DB::table('publications')->insert([
                'titre' => 'UnTitre',
                'texte' => 'DuTexte',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('publications')->insert([
                'titre' => 'unTitre',
                'texte' => 'unTexte',
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
                
            
            DB::table('recompenses')->insert([
                'type' => 'Un Câlin',
                'description' => 'Gros hug, bro',
                'equipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 ]);  
            
            DB::table('recompenses')->insert([
                'type' => 'Un cadeau',
                'description' => 'C est une surprise, on peut pas dire, ça va de soit, soit pas débile, fais un effort, na na na na, na na na na, ...',
                'equipe_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            
            DB::table('sponsors')->insert([
                'nom' => 'BCV',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('sponsors')->insert([
                'nom' => 'UBS',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            $this->call(ACLSeeder::class);
            
            Schema::enableForeignKeyConstraints();
    }
}
