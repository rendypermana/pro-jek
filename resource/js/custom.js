//script carousel
$('.carousel').carousel({
        interval: 5000 //changes the speed
})


//script search
$('#buttonsearch').click(function(){
    $('#formsearch').slideToggle( "fast",function(){
    $( '#content' ).toggleClass( "moremargin" );
    } );
    $('#searchbox').focus()
    $('.openclosesearch').toggle();
});


//script botton back to top
$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
            }
        });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
        
    $('#back-to-top').tooltip('show');
});

//script wow animate
new WOW().init();

//script modal


