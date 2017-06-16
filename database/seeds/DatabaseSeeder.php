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

        /* On commence par vider toutes les tables */
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

        DB::table('recompenses')->insert([
            'type' => 'Grand Prix - catégorie Transport de Masse (TM)',
            'description' => "Notre team est, également, arrivée en 2ème position du Grand Prix 'HYDROCONTEST', dans la catégorie Transport de Masse (TM), juste derrière a team EPFL. ",
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]);

        DB::table('recompenses')->insert([
            'type' => 'Grand Prix - catégorie Transport de Masse (TM)',
            'description' => "Cette édition 2017 a décerné à notre seconde équipe HEIG le 1er prix de la communication",
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]);

        /* Appel du seeder des utilisateurs/groupes/ressources */
        $this->call(ACLSeeder::class);


/* EDITIONS ------------------------------------------------------------------------------------------------- */

        DB::table('editions')->insert([
            'annee' => '2017',
            'textePresentation' => "Pour cette nouvelle édition du concours Hydrocontest, qui se déroulera du 4 au 10 septembre 2017, les étudiants de la HEIG-VD sont à nouveau au rendez-vous!",
            'lieu' => 'Saint-Tropez',
            'dateConcours' => '2017-09-04',
            'texteConcours' => "Événement phare de la Fondation Hydros en 2016, l'HYDROcontest est le premier concours étudiant international dédié à l'efficience énergétique nautique et maritime.

À la fois outil d'éducation, de sensibilisation, et incubateur d'idées, l'HYDROcontest rassemble les futurs ingénieurs et architectes du monde entier autour d'une problématique commune:

TRANSPORTEZ PLUS, PLUS VITE, EN CONSOMMANT MOINS D'ÉNERGIE

Les étudiants sont invités à concevoir, fabriquer et piloter le bateau le plus efficient en termes d'énergie." ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('editions')->insert([
            'annee' => '2016',
            'textePresentation' => "Pour cette édition 2016, la team hydrocontest de la HEIG-VD a le plaisir d'acueillir au sein de son équipe deux seins."
            . "Pour la première fois de son histoire, une fille a décidé de faire partie de l'aventure et dese jeter da ns le grand bain. Ca fait plaisir!"
            . "D'autant que le concours se disputera au bord d'une grande étendue d'eau. Un spot idéal pour étencher la soif de quiconque souhaiterait "
            . "se désaltérer. De plus, cette année, Hodrocontest accueille plus de cent-mille-milliards d'équipes, prêtes à se foutre sur la gueule à coup de télécommandes. "
            . "On s'attend à de l'UFC. Ca promet! La TEAM HEIG vous attend nombreux pour venir soutenir l'événement. Vive Hydrocontest!",
            'lieu' => 'Lausanne',
            'dateConcours' => '2016-07-28',
            'texteConcours' => "Événement phare de la Fondation Hydros en 2016, l'HYDROcontest est le premier concours étudiant international dédié à l'efficience énergétique nautique et maritime.

À la fois outil d'éducation, de sensibilisation, et incubateur d'idées, l'HYDROcontest rassemble les futurs ingénieurs et architectes du monde entier autour d'une problématique commune:

TRANSPORTEZ PLUS, PLUS VITE, EN CONSOMMANT MOINS D'ÉNERGIE

Les étudiants sont invités à concevoir, fabriquer et piloter le bateau le plus efficient en termes d'énergie." ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('editions')->insert([
            'annee' => '2015',
            'textePresentation' => "Pour l'édition 2015 d'hydrocontest, c'est une équipe remaniée qui se preésente. En effet, pour ce challenge au bord du lac léman."
            . " Plusieurs sponsor se sont ajoutés à une bande déja bien fournie, ce qui amène son nombre à 13 ce qui est pour le moins réjoissant."
            . "Cette année, Hodrocontest accueille plus de trois équipes, ce qui, par rapport à l'édition précédente, correspond au même nombre d'équipes, à peu près."
            . "En effet, l'année dernière ce non pas deux, ni quatres mais bien un nombre d'équipes équivalent à celui que pourrait être le troisième chiffre premier"
            . " (si l'on exclut le zéro, bien entendu). Des bateaux, des rires, des boobs, de la tise, on va se mettre bien!",
            'lieu' => 'Ouchy',
            'dateConcours' => '2015-06-05',
            'texteConcours' => "Événement phare de la Fondation Hydros en 2015, l'HYDROcontest est le premier concours étudiant international dédié à l'efficience énergétique nautique et maritime.

À la fois outil d'éducation, de sensibilisation, et incubateur d'idées, l'HYDROcontest rassemble les futurs ingénieurs et architectes du monde entier autour d'une problématique commune:

TRANSPORTEZ PLUS, PLUS VITE, EN CONSOMMANT MOINS D'ÉNERGIE

Les étudiants sont invités à concevoir, fabriquer et piloter le bateau le plus efficient en termes d'énergie.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

/* EQUIPES ------------------------------------------------------------------------------------------------- */

        DB::table('equipes')->insert([
            'nom' => 'Team HEIG-VD',
            'description' => 'La team HEIG est fière de représenter le nord vaudois dans cette édition 2015.'
            . 'Surprise cette année, 2 filles se joignent',
            'type' => 'principal',
            'edition_annee' => '2015',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('equipes')->insert([
            'nom' => 'Team HEIG-VD communication',
            'description' => 'Les étudiants de COMEM sont là pour appuyer les étudiants TIN dans la communication de la team.',
            'type' => 'secondaire',
            'edition_annee' => '2015',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('equipes')->insert([
            'nom' => 'Team HEIG-VD',
            'description' => "La première équipe de la HEIG-VD participant au concours Hydrocontest!",
            'type' => 'principal',
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('equipes')->insert([
            'nom' => 'Team HEIG-VD Communication',
            'description' => "Toujours prêts pour appuyer l'équipe d'étudiants TIN pour la communication de l'équipe.",
            'type' => 'secondaire',
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('equipes')->insert([
            'nom' => 'Team HEIG-VD',
            'description' => "Tous ensemble vers l'efficience énergétique! ",
            'type' => 'principal',
            'edition_annee' => '2017',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('equipes')->insert([
            'nom' => 'Team HEIG-VD Communication',
            'description' => "La communication est un élément clé du succès de l'équipe représentant la HEIG-VD au concours Hydrocontest. Nous sommes là pour les assister.",
            'type' => 'secondaire',
            'edition_annee' => '2017',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

/* MEDIAS ------------------------------------------------------------------------------------------------- */

        DB::table('medias')->insert([
            'nom' => 'image1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('medias')->insert([
            'nom' => 'image2.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('medias')->insert([
            'nom' => 'image3.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('medias')->insert([
            'nom' => 'image4.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('medias')->insert([
            'nom' => 'image5.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('medias')->insert([
            'nom' => 'image6.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('medias')->insert([
            'nom' => 'image7.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('medias')->insert([
            'nom' => 'image8.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

/* MEMBRES ------------------------------------------------------------------------------------------------- */

        DB::table('membres')->insert([
            [   'nom' => 'Aeschimann ',
                'prenom' => 'Jonathan',
                'email' => 'jonathan_a@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Favre',
                'prenom' => 'Mathias',
                'email' => 'mathias@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Coelho',
                'prenom' => 'Jonathan',
                'email' => 'jonathan_c@hotmail.com',

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Gerber',
                'prenom' => 'Julien',
                'email' => 'julien@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Bolomey',
                'prenom' => 'David',
                'email' => 'david@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Duarte',
                'prenom' => 'Dani',
                'email' => 'dani@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Paridant De Cauwere',
                'prenom' => 'Romain',
                'email' => 'romain@hydro.heig-vd.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Bolomey',
                'prenom' => 'David',
                'email' => 'david_bolomey@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Gravier',
                'prenom' => 'Laurent',
                'email' => 'laurent.gravier@heig-vd.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Fernandes',
                'prenom' => 'Dylan',
                'email' => 'dylan@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Enzen Villegas',
                'prenom' => 'Carla',
                'email' => 'carla@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Lot',
                'prenom' => 'Antoine',
                'email' => 'antoine@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'nom' => 'Kostic',
                'prenom' => 'David',
                'email' => 'david.kostic@ehig-vd.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);

/* PROFILS ------------------------------------------------------------------------------------------------- */

        DB::table('profils')->insert([[
            'fonction' => "Team Manager",
            'description' => "Management de projet et coordination avec les autres membres de l'équipe.",
            'departement' => 'TIN',
            'anneeEtude' => '2',
            'membre_id' => '1',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Communication Manager",
            'description' => "Coordonner les questions de communication avec les étudiants du département COMEM." ,
            'departement' => 'TIN',
            'anneeEtude' => '2',
            'membre_id' => '2',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Logistics Manager",
            'description' => "Coordination avec les fournisseurs, prise en charge du matériel." ,
            'departement' => 'TIN',
            'anneeEtude' => '3',
            'membre_id' => '3',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Associé de projet",
            'description' => "Plans, maquettes et calculs." ,
            'departement' => 'TIN',
            'anneeEtude' => '3',
            'membre_id' => '4',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Associé de projet",
            'description' => "Aérodynamisme et design industriel." ,
            'departement' => 'TIN',
            'anneeEtude' => '3',
            'membre_id' => '5',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Associé de projet",
            'description' => "Design industriel" ,
            'departement' => 'TIN',
            'anneeEtude' => '3',
            'membre_id' => '6',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "External Provider",
            'description' => "Partenaire externe, fournisseur." ,
            'departement' => 'Externe',
            'anneeEtude' => '10',
            'membre_id' => '7',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Chercheur - Superviseur",
            'description' => "Enseignant à la HEIG-VD en charge de la supervision de l'équipe." ,
            'departement' => 'TIN',
            'anneeEtude' => '23',
            'membre_id' => '8',
            'equipe_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Coordinateur",
            'description' => "En charge de la coordination de l'équipe COMEM." ,
            'departement' => 'COMEM',
            'anneeEtude' => '2',
            'membre_id' => '9',
            'equipe_id' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Responsable Design",
            'description' => "InDesign gourou en charge des questions de design auprès de l'équipe de communication." ,
            'departement' => 'COMEM',
            'anneeEtude' => '2',
            'membre_id' => '10',
            'equipe_id' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Video Manager",
            'description' => "Responsable de l'audiovisuel, en charge de la réalisation et de la promotion." ,
            'departement' => 'COMEM',
            'anneeEtude' => '2',
            'membre_id' => '11',
            'equipe_id' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'fonction' => "Event Manager",
            'description' => "Responsable de l'événementiel autour de l'équipe." ,
            'departement' => 'COMEM',
            'anneeEtude' => '2',
            'membre_id' => '12',
            'equipe_id' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]]);

/* PRESSES ------------------------------------------------------------------------------------------------- */

        DB::table('presses')->insert([
            'url' => 'http://www.letelegramme.fr/finistere/hydrocontest-2016-l-ensta-bretagne-remporte-la-3e-edition-01-08-2016-11166928.php',
            'titre' => 'Le Télégramme',
            'description' => "HydroContest 2016. L'Ensta Bretagne remporte la 3e édition",
            'date' => '2016-08-01',
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('presses')->insert([
            'url' => 'http://www.presseocean.fr/actualite/nantes-lecole-centrale-remporte-lhydrocontest-31-07-2016-199732',
            'titre' => 'Presse Océan',
            'description' => "Nantes : L'école Centrale remporte l'Hydrocontest",
            'date' => '2016-07-31',
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('presses')->insert([
            'url' => 'http://www.presseocean.fr/actualite/nantes-lecole-centrale-remporte-lhydrocontest-31-07-2016-199732',
            'titre' => 'lémanbleu',
            'description' => "UNE COMPÉTITION POUR RÉINVENTER LE TRANSPORT MARITIME",
            'date' => '2016-07-28',
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('presses')->insert([
            'url' => 'http://www.lefigaro.fr/sciences/2016/07/22/01008-20160722ARTFIG00231-et-si-des-etudiants-inventaient-les-bateaux-du-futur8230.php',
            'titre' => 'Le Figaro',
            'description' => "Et si des étudiants inventaient les bateaux du futur…",
            'date' => '2016-07-22',
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('presses')->insert([
            'url' => 'http://www.laliberte.ch/news-agence/detail/hydrocontest-l-epfl-remporte-une-des-trois-competitions/292457#.WUJBaGjyhPY',
            'titre' => 'La Liberté',
            'description' => "Hydrocontest: l'EPFL remporte une des trois compétitions",
            'date' => '2015-07-19',
            'edition_annee' => '2015',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('presses')->insert([
            'url' => 'http://www.arcinfo.ch/articles/lifestyle/techno-et-sciences/hydrocontest-les-bateaux-du-futur-concourent-a-lausanne-407817',
            'titre' => 'Arcinfo',
            'description' => "EFFICIENCE ÉNERGÉTIQUE - Seize équipes de scientifiques aguerris participent depuis ce mardi à la deuxième édition d'Hydrocontest à Lausanne sur le lac. 150 futurs ingénieurs composent des équipes qui ont développé ces bateaux du futur pendant des mois.",
            'date' => '2015-07-14',
            'edition_annee' => '2015',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

/* PUBLICATIONS ------------------------------------------------------------------------------------------------- */

        DB::table('publications')->insert([
            'titre' => "Des nouvelles de l'atelier",
            'texte' => "Comme promis ce week-end nous n'avons pas chômé. Les choses avances gentiment et on est toujours autant aux taquets. C'était notre dernier long week-end avant les examens qui sont à la fin du mois.",
            'edition_annee' => '2017',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('publications')->insert([
            'titre' => "Des courses de bateau pendant la semaine grillades!",
            'texte' => "Les courses de bateaux télécommandés ont attirés du monde malgré le temps maussade. Tous les particpants se sont dits ravis!",
            'edition_annee' => '2017',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('publications')->insert([
            'titre' => "Succès suisse et français lors de l'Hydrocontest 2016",
            'texte' => "Cette édition de l’HydroContest sera prête à accueillir les spectateurs pour les courses, mais proposera aussi une multitude d’activités pour tous.
            Le public aura la chance de tester des bateaux radiocommandés dans un bassin rattaché au ponton où les courses se dérouleront. 10 maquettes de bateaux à foils radiocommandés de 60 cm réalisées par Hydos et l'architecte naval Antoine Mainfray seront mis à disposition pour tester l’hydrodynamique et l’efficience énergétique de la technologie des foils.
            Les spectateurs auront aussi une possibilité de voir les phases finales de la compétition en paddle board. En effet, Fool Moon mettra à disposition 15 paddles pour vivre l’expérience HydroContest de façon optimale.",
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('publications')->insert([
            'titre' => "Une énorme réussite pour les étudiants de la HEIG-VD.",
            'texte' => "Les hautes écoles suisses et françaises ont dominé l’édition 2016 de l’HydroContest. Dans la catégorie « bateaux légers », c’est Central Nantes qui s’impose, alors que la catégorie « bateaux lourds » a vu, contre toute attente, la victoire de l’ENSTA Bretagne – Paris-La-Villette. La « Long Distance Race » a été marquée par le triomphe de la Haute Ecole d'Ingénierie et d'Architecture (HEIA) de Fribourg.
            Travail acharné jusque tard dans la nuit, modifications de dernière minute, échange continu, les 250 étudiants de l’HydroContest ont tout donné pour peaufiner leurs bateaux lors de ces phases finales. Un florilège de prototypes aux formes très différentes les unes des autres s’est affronté dès jeudi donnant lieu à de très belles courses.",
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('publications')->insert([
            'titre' => "Vainqueurs de l'édition 2016:",
            'texte' => "Trophée catégorie « Transport légers » : Central Nantes (France)

            Trophée catégorie « Transport de Masse » : ENSTA Bretagne – Paris-La-Villette (France)

            Trophée catégorie « Long Distance Race » : HEIA Fribourg (Suisse)

            Prix de l’innovation « Transports légers » : EPFL (Suisse)

            Prix de l’innovation « Transports de masse » : HEIG-VD (Suisse)

            Prix d’Eco Conception : EPFL (Suisse)

            Prix de communication : University of Southampton (Angleterre)

            Prix de l’esprit Hydrocontest : HEIA Fribourg (Suisse)",
            'edition_annee' => '2016',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('publications')->insert([
            'titre' => "Transporter plus plus vite, en consommant moins d'énérgie",
            'texte' => "II s’agit d’une des problématiques actuelles et communes liées au développement industriel et technologique de notre ère. Avec 90% des échanges commerciaux opérés par la mer, le transport maritime est un enjeu économique et environnemental majeur. En effet, si le bateau reste le moyen de transport le plus écologique, en matière d’emissions de CO2 par tonne transportée, il représente tout de même la 5ème source de pollution mondiale.
            Face a une flotte en constante augmentation, la question de l’efficience énergétique de ces navires se pose comme une problématique à la fois centrale et qui conditionne la croissance de cette industrie.",
            'edition_annee' => '2015',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('publications')->insert([
            'titre' => 'HYDROCONTEST : C’EST PARTI POUR L’ÉDITION 2015',
            'texte' => "Les 16 équipes internationales d’étudiants ingénieurs et leurs prototypes de bateaux du futur entament demain les phases de qualification de l’HYDROCONTEST 2015. Rendez-vous du 14 au 19 juillet au village HYDROCONTEST situé à Lausanne aux Pyramides de Vidy pour suivre ce concours unique au monde et admirer les bateaux volants, innovants, performants et toujours plus efficients…
            Venues des  4 coins du globe, les équipes de 16 grandes écoles d’ingénieur sont arrivées en Suisse pour investir une semaine durant les rives du Léman. Dans leurs bagages ? Des prototypes d’embarcations conçus et construits par leurs soins à échelle réduite pour tenter d’imaginer les bateaux de demain, qui devront transporter plus, plus longtemps, en consommant le moins d’énergie possible, et prouver leur efficience en situation réelle pendant les courses qui les départageront.",
            'edition_annee' => '2015',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

/* RECOMPENSES ------------------------------------------------------------------------------------------------- */

        DB::table('recompenses')->insert([
            'type' => 'Trophée "Best Comunication"',
            'description' => "Cette année, notre équipe de communication à remporté le trophée de la meilleur communication ! Nous somme très fier de ce prix car nous avons investi beaucoup de temps et de moyens afin de communiqué au mieux notre parcours durant cette édition.",
            'equipe_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]);

        DB::table('recompenses')->insert([
            'type' => "Prix de l'innovation 'Transport de masse'",
            'description' => "Durant cette édition 2016, nous avons remporté le prix de l'innovation dans la catégorie 'Transports de masse'.",
            'equipe_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]);

        DB::table('recompenses')->insert([
            'type' => 'Grand Prix - catégorie Transport de Masse (TM)',
            'description' => "Notre team est, également, arrivée en 2ème position du Grand Prix 'HYDROCONTEST', dans la catégorie Transport de Masse (TM), juste derrière a team EPFL. ",
            'equipe_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]);

        DB::table('recompenses')->insert([
            'type' => "Prix de l'innovation 'Transport de masse'",
            'description' => "Durant cette édition 2016, nous avons remporté le prix de l'innovation dans la catégorie 'Transports de masse'.",
            'equipe_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]);

        DB::table('recompenses')->insert([
            'type' => 'Grand Prix - catégorie Transport de Masse (TM)',
            'description' => "Notre team est, également, arrivée en 2ème position du Grand Prix 'HYDROCONTEST', dans la catégorie Transport de Masse (TM), juste derrière a team EPFL. ",
            'equipe_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]);

/* SPONSORS ------------------------------------------------------------------------------------------------- */

        DB::table('sponsors')->insert([
            'nom' => 'la Loterie Romande',
            'url' => 'www.loro.ch',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('sponsors')->insert([
            'nom' => 'Canton de Vaud',
            'url' => 'www.vd.ch',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('sponsors')->insert([
            'nom' => 'Migros Catering Services',
            'url' => 'www.catering-services-migros.ch',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('sponsors')->insert([
            'nom' => 'SIL Citycable',
            'url' => 'www.citycable.ch',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

/* EDITIONS_SPONSORS ---------------------------------------------------------------------------------------------- */

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2017',
            'sponsor_nom' => 'Canton de Vaud',
            'valeur' => 'principal',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2017',
            'sponsor_nom' => 'SIL Citycable',
            'valeur' => 'or',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2017',
            'sponsor_nom' => 'la Loterie Romande',
            'valeur' => 'argent',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2017',
            'sponsor_nom' => 'Migros Catering Services',
            'valeur' => 'bronze',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2016',
            'sponsor_nom' => 'la Loterie Romande',
            'valeur' => 'principal',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2016',
            'sponsor_nom' => 'Canton de Vaud',
            'valeur' => 'or',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2016',
            'sponsor_nom' => 'SIL Citycable',
            'valeur' => 'argent',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2016',
            'sponsor_nom' => 'Migros Catering Services',
            'valeur' => 'bronze',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2015',
            'sponsor_nom' => 'Canton de Vaud',
            'valeur' => 'principal',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2015',
            'sponsor_nom' => 'la Loterie Romande',
            'valeur' => 'or',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2015',
            'sponsor_nom' => 'SIL Citycable',
            'valeur' => 'argent',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('edition_sponsor')->insert([
            'edition_annee' => '2015',
            'sponsor_nom' => 'Migros Catering Services',
            'valeur' => 'bronze',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);




/* Tests d'ajout d'élément dans la BD avec les méthodes purement lavareliennes
    FONCTIONNE! :) Mais mis en commentaires pour pas avoir d'édition 2018 dans la BD */

//         //Création d'une édition
//        $edition = new \App\Models\Edition();
//        $edition
//            ->setAttribute("annee", "2018")
//            ->setAttribute("textePresentation", "Test")
//            ->setAttribute("texteConcours", "Test")
//            ->setAttribute("lieu", "Miami Beach")
//            ->setAttribute("dateConcours", "2018-07-04")
//            ->save();
//
//        // Création d'une équipe
//        $equipe = new \App\Models\Equipe();
//        $equipe->setAttribute("nom", "Team HEIG-VD")
//            ->setAttribute("type", "principal")
//            ->setAttribute("description", "Une fois de plus, la HEIG-VD est présente pour le concours Hydrocontest!")
//            ->setAttribute("edition_annee", $edition->annee)
//            ->save();
//        // Création d'un membre
//        $membre = new \App\Models\Membre();
//        $membre->setAttribute('nom','Mermoud')
//            ->setAttribute('prenom','Nicolas')
//            ->setAttribute('email','nicolas@mermoud.me')
//            ->save();
//
//        // Création d'un profil
//        $profil = new \App\Models\Profil();
//        $profil->setAttribute('equipe_id', 1)
//            ->setAttribute('fonction','Fatal Error')
//            ->setAttribute('description', 'Je tâche ne pas m énerver')
//            ->setAttribute('departement','COMEM')
//            ->setAttribute('anneeEtude', '2');
//        // On enregistre le profil créé en l'associant à un membre
//        $membre->profils($profil);
//        $membre->save();
//
//        // On crée un sponsor
//        $sponsor = new \App\Models\Sponsor();
//        $sponsor->setAttribute("nom", "Ville d'Yverdon-les-Bains")
//            ->setAttribute("url", "http://www.yverdon-les-bains.ch")
//            ->save();
//
//        $edition_sponsor = new \App\Models\edition_sponsor();
//        $edition_sponsor
//            ->setAttribute("valeur", "principal")
//            ->setAttribute("sponsor_nom", $sponsor->nom);
//
//        $edition->edition_sponsors()->save($edition_sponsor); // <---- pour sauvegarder des associations


        Schema::enableForeignKeyConstraints();
    }
}
