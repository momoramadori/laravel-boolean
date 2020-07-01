require('./bootstrap');
const $ = require('jquery');

//mobile/desktop versions of header switching
$('i.fas.header').click(function(){
    $('.mobile').toggleClass('active');
    $('header').toggleClass('disabled');
})

$('.risposta').hide();
$('.faq i').click(function(){
    //when we click the icons all the + icons appear
    $('.risposta').siblings('.fa-plus').addClass('active');
    //only visible answers disappear
    $('.risposta:visible').slideUp();
    //  hidden answer, if clicked, appears
    $(this).siblings('.risposta:hidden').slideDown();
    // to change the icons between themselves
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).siblings('i').addClass('active');
    }
})


//responsive version, without icons 
$(window).resize(function() {
    if ($(window).width() <= 500){
        $('.faq i').removeClass('active');
    }
  });
 
$('.domanda').on('click',function(){
    if ($(window).width() <= 500) {  
        $('.risposta:visible').slideUp();
        $(this).siblings('.risposta:hidden').slideDown();
        
    }      
})

