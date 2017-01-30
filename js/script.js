$(document).ready(function(){
    
    // refresh de la page quand on click sur le bouton refresh ou le logo
    $('.fa-refresh').click(function(){
       location.reload(); 
    });
    $('.logo').click(function(){
       location.reload(); 
    });
    
    // animation du bouton 'descendre' dans le header
    setInterval(function() { $("#go-down").toggleClass('bounce'); }, 1200);
    
    // scroll fluide
    $('#go-down').click(function() {
        var speed = 800;
        $('html, body').animate( { scrollTop: $('#about').offset().top }, speed );
        return false;
    });
    
    $('li a').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 800; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
    
});