$(function () {
    menuHandler();
    $(".container").on("click", "header.online .connection", function () {
        switchPageWithHistory('synch');
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

