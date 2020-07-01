require('./bootstrap');
const $ = require('jquery');

$('i.fas.header').click(function(){
    $('.mobile').toggleClass('active');
    $('header').toggleClass('disabled');
})

$('.risposta').hide();
$('.faq i.fa-plus').click(function(){
    $(this).siblings('.risposta').slideDown();
    $(this).removeClass('active');
    $(this).next('i').addClass('active');
})

$('.faq i.fa-minus').click(function(){
    $(this).siblings('.risposta').slideUp();
    $(this).removeClass('active');
    $(this).siblings('i').addClass('active');
})