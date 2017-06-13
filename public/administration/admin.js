$(function () {
    $(".form-create").hide();
    $(".form-mod").hide();
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
    menuHandler();
    $(".container").on("click", "header.online .connection", function () {
        switchPageWithHistory('synch');
    });

    // show le formulaire 
    // créer édition
    $("#btn-show-form").click(function () {
        $('.form-create').toggle();
        
    });
    // modif édition
    $(".year-edition").click(function () {
        $('.form-mod').toggle();
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
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
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
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
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
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });


    // active la gisage menu
    $(".navbar-nav > li > a").click(function (){
        $(this).toggleClass("link-active");
        $('a.link-active').removeClass("link-active");
    });
    
});

function menuHandler() {
    // History manipulation
    $(window).on("popstate", function (e) {   // event popstate -> changement d'url
        var idPage = location.hash;  //tout se qu'il y a après le #
        idPage = idPage.substring(1);     // on supprime le #
        if ($("#page_" + idPage).length == 0) { // si l id de page existe on redirige sinon -> intro
            idPage = "accueil";
            window.location = "#" + idPage;
        }
        switchPage(idPage);
    });
    $(window).trigger('popstate');
}

function switchPage(pageId) {
    $(".page").hide();
    $("#page_" + pageId).show();
}

function switchPageWithHistory(pageId) {
    history.pushState(null, null, '#' + pageId);
    $(window).trigger('popstate');
}

