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
                'textePresentation' => "Bienvenue à tous, 2016 c' bien",
                'lieu' => 'Bora Bora',
                'dateConcours' => '2016-07-28',
                'texteConcours' => "Cette année, Hodrocontest accueille plus de cent-mille-milliards d'équipes, prêtes à se foutre sur la gueule à coup de télécommandes. On s'attend à de l'UFC. Ca promet!" ,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('editions')->insert([
                'annee' => '2015',
                'textePresentation' => "Bienvenue à tous, 2015 c'est mieux",
                'lieu' => 'Bora Bora',
                'dateConcours' => '2015-06-05',
                'texteConcours' => "Cette année, Hodrocontest accueille plus de trois équipes, ce qui, par rapport à l'édition précédente, correspond au même nombre d'équipes, à peu près",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            
            DB::table('equipes')->insert([
                'nom' => 'TEAM HEIG-VD',
                'description' => 'On aime autant les bateaux que Kostic aime les enfants',
                'type' => 'principal',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('equipes')->insert([
                'nom' => 'EAM HEIG-VD',
                'description' => 'En bateau, Simon',
                'type' => 'principal',
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            
            DB::table('medias')->insert([
                'url' => 'https://www.google.ch/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwibr5u8-L3UAhXHVxoKHZHXA3EQjRwIBw&url=http%3A%2F%2Fwww.casafun.com%2Fimages_droles%2Fbateau_resto.htm&psig=AFQjCNHevUxKdBHb-2LB8eMCbFY95-cJ0g&ust=1497550492997746',
                'titre' => 'Un beau bateau',
                'description' => 'Ca bosse dur à hydrocontest',
                'type' => 'photo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('medias')->insert([
                'url' => 'https://www.google.ch/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwit_tnz-L3UAhWCWBoKHR6VCjoQjRwIBw&url=http%3A%2F%2Fhumourger.com%2Fbateau%2Findex2.html&psig=AFQjCNHevUxKdBHb-2LB8eMCbFY95-cJ0g&ust=1497550492997746',
                'titre' => 'site',
                'description' => "Quelle bonne surprise! Une équipe de gitan s'est jointe à la compétition!",
                'type' => 'photo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            
            DB::table('membres')->insert([
                'nom' => 'Aeschimann ',
                'prenom' => 'Jonathan',
                'email' => 'jeanjean@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Favre',
                'prenom' => 'Mathias',
                'email' => 'yvesyves@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Coelho',
                'prenom' => 'Jonathan',
                'email' => 'PierrePaulJacques@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Gerber',
                'prenom' => 'Julien',
                'email' => 'jeannejeanne@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Bolomey',
                'prenom' => 'David',
                'email' => 'jeannejeanne@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Duarte',
                'prenom' => 'Dani',
                'email' => 'jeannejeanne@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Fernandes',
                'prenom' => 'Dylan',
                'email' => 'jeannejeanne@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Bolomey',
                'prenom' => 'David',
                'email' => 'jeannejeanne@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Enzen Villegas',
                'prenom' => 'Carla',
                'email' => 'jeannejeanne@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Lot',
                'prenom' => 'Antoine',
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
                'description' => 'Raconter un minimum de 3 blagues moyennes par tranche de 5 heures',
                'departement' => 'TIC',
                'anneeEtude' => '1',
                'membre_id' => '4',
                'equipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
                
            DB::table('profils')->insert([
                'fonction' => 'Gars casse couille',
                'description' => "Rappeler périodiquement à mes camarades leur manque d'engagement" ,
                'departement' => 'Haute-Seine',
                'anneeEtude' => '798', 
                'membre_id' => '5',
                'equipe_id' => '1',
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
                'nom' => 'la Loterie Romande',
                'url' => 'www.loro.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('sponsors')->insert([
                'nom' => 'Canton de vaud',
                'url' => 'www.catering-services-migros.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('sponsors')->insert([
                'nom' => 'Migros Catering Services',
                'url' => 'www.vd.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('sponsors')->insert([
                'nom' => 'SIL Citycable.',
                'url' => 'www.citycable.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            
            Schema::enableForeignKeyConstraints();
    }
}
