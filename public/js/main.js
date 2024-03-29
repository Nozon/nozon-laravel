
var hauteur = 800; // XXX, c'est le nombre de pixels à partir duquel on déclenche le tout
var hauteurRemonte = 0;
$(function () {
	// activation compteur
	compte_a_rebours();
	$("#main-sidenav").hide();

	// nav cachée puis activ au scroll
	$('#mainNav').hide();  // d'abord, on masque le deuxième menu de navigation, qui porte la classe "navigation2"
	$('.membre-description').hide();
	$('.membre-soutien-description').hide();
 	$(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > hauteur) { //si on a défile de plus de XXX (variable "hauteur) pixels du haut vers le bas
      		$('.logo-home').animate({
            		marginTop: "-35%"
            }, 500);
            $('#mainNav').fadeIn("slow", function() {
            	// on abaisse le logo
            	$('#mainNav').show();
            }); // On affiche le 2
      } else {
            $('#mainNav').hide();
            // on réhause le logo
            
      }
   	});
   	
 	$(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > hauteur) { //si on a défile de plus de XXX (variable "hauteur) pixels du haut vers le bas
            $('#main-sidenav').fadeIn("slow", function() {
            	$('#main-sidenav').show();
           		// 
            }); // On affiche le 2
      } else {
            $('#main-sidenav').hide(); 
      }
   	});


 	// lors de l'arrivée sur le  main content logo home se décale de 50px
 	/*
 	$('.logo-home').fadeIn("slow", function() {
            		$('.logo-home').removeClass("logo-home").addClass("logo-home-main"); // -----> TROUVER UN MOYEN D?ANIMER LE CHANGEMENT FLUIDEMENT
            	});
            }); // On affiche le 2
      } else {
            $('#mainNav').hide();
            // on réhause le logo
            $(".logo-home-main").removeClass("logo-home-main").addClass("logo-home");
      }
      */

   	

    // connexion/déconnexion
    
    // Devenir sponsor
      $("#btn-dev").on('click', function() {
          
          $("#devSponsor").toggleClass('hidden');
      });

    // smooth scroll
    $(".js-scrollTo").on('click', function() { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 750; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
		return false;
	});

	// nav édition changement cercle
	/*
	$('div').filter('.nav-edition-container-year').mouseover(function (){
		$(this).children('a.nav-edition-year').addClass("year-activ");
		$(this).parents('li.nav-edition-circle').addClass("circle-activ");
	})
	.mouseleave(function (){
		$(this).children('a.nav-edition-year').removeClass("year-activ");
		$(this).parents('li.nav-edition-circle').removeClass("circle-activ");
	});
	*/

	$('div').filter('.nav-edition-container-year').click(function (){
		$(this).children('a.nav-edition-year').addClass("year-activ");
		$(this).parents('li.nav-edition-circle').addClass("circle-activ");
	});
	

	
	// membre show description
	$(".team-member").mouseover(function () {
		$(this).children('div.membre-description').show();
		
	})
	.mouseout(function() {
		$(this).children('div.membre-description').hide();
	});

	// membre soutien
	$(".team-soutien-member").mouseover(function () {
		$(this).children('div.membre-soutien-description').show();
		
	})
	.mouseout(function() {
		$(this).children('div.membre-soutien-description').hide();
	});

});

function compte_a_rebours() {
	// récup date via requête ajax

		var dateConcours = $("#dateDuConcours").val();
		var date_evenement = new Date ("Sep 4 2017 00:00:00");
		console.log(date_evenement);
		var titre = $("#compteAReboursTitre").text("Début du concours dans :");
		var date_actuelle = new Date();
		var total_secondes = (date_evenement - date_actuelle) / 1000;
			 
		if (total_secondes < 0) {
			titre = $("#compteAReboursTitre").text("Concours terminé depuis :"); // On modifie le préfixe si la différence est négatif
			total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
		}

		if (total_secondes > 0) {
			// transfo durée
			var jours = Math.floor(total_secondes / (60 * 60 * 24));
			var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
			var minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
			var secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));
			// assignation aux champs
			$("#jours").text(jours);
			$("#heures").text(heures);
			$("#minutes").text(minutes);
			$("#secondes").text(secondes);
		}
		else {
			compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
		}
		var actualisation = setTimeout("compte_a_rebours();", 1000);

	
}

