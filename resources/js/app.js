require('./bootstrap');
const $ = require('jquery');

$('i.fas.header').click(function(){
    $('.mobile').toggleClass('active');
    $('header').toggleClass('disabled');
})

$('.risposta').hide();
$('.faq i').click(function(){
    $('.risposta').siblings('.fa-plus').addClass('active');
    $('.risposta:visible').slideUp();
    $(this).siblings('.risposta:hidden').slideDown();
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).siblings('i').addClass('active');
    }
})


//versione responsive 
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

