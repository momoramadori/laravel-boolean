require('./bootstrap');
const $ = require('jquery');

$('i.fas').click(function(){
    $('.mobile').toggleClass('active');
    $('header').toggleClass('disabled');
})
