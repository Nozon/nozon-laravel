$(function () {
    $(".form-create").hide();
    $(".form-mod").hide();
    
    $(".form-add-equipe").hide();
    $(".form-mod-equipe").hide();
    
    $(".form-mod-membre").hide();
    $(".form-add-membre").hide();
    $(".form-add-sponsor").hide();
    $("#listeSponsor").hide();
    $(".form-mod-sponsor").hide();
    $(".form-add-media").hide();
    $("#listeMedia").hide();
    $(".form-mod-media").hide();
    $(".form-add-news").hide();
    $("#listeNews").hide();
    $(".form-mod-news").hide();
    $(".form-add-press").hide();
    $("#listePress").hide();
    $(".form-mod-press").hide();
    $(".form-add-prix").hide();
    $("#listePrix").hide();
    $(".form-mod-prix").hide();
    $(".form-add-devenirSponsor").hide();
    $(".form-mod-devenirSponsor").hide();
    $(".form-add-compte").hide();


    // menuHandler();
    // $(".container").on("click", "header.online .connection", function () {
    //     switchPageWithHistory('synch');
    // });

    // show le formulaire 
    // créer édition
    $("#btn-show-form").click(function () {
        $('.form-create').toggle();
        
    });
    // modif édition
    $(".year-edition").click(function () {
        $('.form-mod').toggle();
    });
    // modif équipe
    $(".equipe").click(function () {
        $('.form-mod-equipe').show();
    });
    // ajouter equipe
    $(".btn-add-equipe").click(function (){
        $('.form-add-equipe').toggle();
    });
    // modif membre
    $(".membre").click(function () {
        $('.form-mod-membre').show();
    });
    // ajouter membre
    $(".btn-add-membre").click(function () {
        $('.form-add-membre').toggle();
    });
    // ajouter sponsor
    $(".btn-add-sponsor").click(function () {
        $('.form-add-sponsor').toggle();
    });
    // modifier sponsor
        // afficher liste
    $(".sponsor").click(function () {
        $('#listeSponsor').toggle();
        $('.form-mod-sponsor').hide();
    });
        // afficher form
    $(".modif-sponsor").click(function () {
        $('.form-mod-sponsor').show();
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $("#modifierLeSponsor").offset().top }, speed ); // Go
        return false;
    });
    // ajouter média
    $(".btn-add-media").click(function () {
        $('.form-add-media').toggle();
    });

    // modifier médias
        // afficher liste
    $(".media").click(function () {
        $('#listeMedia').toggle();
        $('.form-mod-media').hide();
    });
        // afficher form
    $(".modif-media").click(function () {
        $('.form-mod-media').show();
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $("#modifierLeMedia").offset().top }, speed ); // Go
        return false;
    });

    // ajout news
     $(".btn-add-news").click(function () {
        $('.form-add-news').toggle();
    });

    // modif news
        // afficher liste
    $(".news").click(function () {
        $('#listeNews').toggle();
        $('.form-mod-news').hide();
    });
        // afficher form
    $(".modif-news").click(function () {
        $('.form-mod-news').show();
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $("#modifierLaNews").offset().top }, speed ); // Go
        return false;
    });

    // ajout press
     $(".btn-add-press").click(function () {
        $('.form-add-press').toggle();
    });

    // modif press
        // afficher liste
    $(".press").click(function () {
        $('#listePress').toggle();
        $('.form-mod-press').hide();
    });
        // action click modif
    $(".modif-press").click(function () {
        // récup l'id
        var url = $(this).attr('href').val();
        // récup le titre
        var titre = $(this).parents(".delMod").siblings().eq(1).children().val();
        // récup lien image
        var lienWeb = (this).parents(".delMod").siblings().eq(2).children().val();
        // récup la date
        var date = $(this).parents(".delMod").siblings().eq(3).children().val();
        // récup la descr
        var descr = $(this).parents(".delMod").siblings().eq(4).children().attr('value').val();

        // insertion action formulaire
        $("#modifierLaPress").attr('action').val(url);
        // insertion dans le form
        $("#pressName").val(titre);
        $("#pressDate").val(lienWeb);
        $("#pressArticleLink").val(date);
        $("#pressTetx").val(descr);


        $('.form-mod-press').show();
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $("#modifierLaPress").offset().top }, speed ); // Go
        return false;
    });

    // ajout récompenses
    $(".btn-add-prix").click(function () {
        $('.form-add-prix').toggle();
    });

    // modif prix
        // afficher liste
    $(".prix").click(function () {
        $('#listePrix').toggle();
        $('.form-mod-prix').hide();
    });
        // afficher form
    $(".modif-prix").click(function () {

        $('.form-mod-prix').show();
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $("#modifierLePrix").offset().top }, speed ); // Go
        return false;
    });

    // ajout compte
    $(".btn-add-compte").click(function () {
        $('.form-add-compte').toggle();
    });

    // modif devenir sponsor
    
        // afficher form
    $(".btn-add-devenirSponsor").click(function () {
        $('.form-add-devenirSponsor').toggle();
    });
    $(".devSponsor").click(function () {
        $('.form-mod-devenirSponsor').toggle();
    });


    // active la gisage menu
    $(".navbar-nav > li > a").click(function (){
        $(this).toggleClass("link-active");
        $('a.link-active').removeClass("link-active");
    });

    // récup l'attribut href du btn et l'envoie dans l'action du formulaire puis la même avec les donnée
    $(".delMod:first-child").children(".modif-press").on("click", function() {
        // récup l'id
        var url = $(this).attr('href').val();
        // récup le titre
        var titre = $()
        // on le met dans la chaine
        $("#modifierLaPress").attr("action").val(url);
    });

    
});

// function menuHandler() {
//     // History manipulation
//     $(window).on("popstate", function (e) {   // event popstate -> changement d'url
//         var idPage = location.hash;  //tout se qu'il y a après le #
//         idPage = idPage.substring(1);     // on supprime le #
//         if ($("#page_" + idPage).length == 0) { // si l id de page existe on redirige sinon -> intro
//             idPage = "accueil";
//             window.location = "#" + idPage;
//         }
//         switchPage(idPage);
//     });
//     $(window).trigger('popstate');
// }
//
// function switchPage(pageId) {
//     $(".page").hide();
//     $("#page_" + pageId).show();
// }
//
// function switchPageWithHistory(pageId) {
//     history.pushState(null, null, '#' + pageId);
//     $(window).trigger('popstate');
// }
//
//
