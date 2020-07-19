$(function(){
    $(".navbar a, footer a").on("click", function(event){
        event.preventDefault();
        var hash = this.hash;

        $('body,html').animate({ scrollTop: $(hash).offset().top },1000, function(){window.location.hash = hash;})
    });
    /* La fonction ci-dessus permet de rendre soft la redirection vers un lien sur la même page */


    /* Masquer automatiquement le menu en mode petite résolution */
    $("#myNavbar a").on("click", function () {
        $("#myNavbar").collapse("hide");
    });
    $("footer a").on("click", function () {
        $("#myNavbar").collapse("hide");
    });
})

