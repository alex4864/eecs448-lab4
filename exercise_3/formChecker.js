'use strict'
$(document).ready(function() {

  $('#order-form').submit(function(event) {
    console.log('test');
    // RFC 5322 compliant email validation regex, I'm assuming writing this is beyond the scope of this (or any) lab
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if(!$('input[name="username"]').val() || !emailRegex.test($('input[name="username"]').val())){
      event.preventDefault();
      alert("Username must be a valid email");
    }

    if(!$('input[name="password"]').val()){
      event.preventDefault();
      alert("Password must not be blank");
    }

    if(!$('input[name="toasters"]').val() || !$('input[name="toasters"]').val() < 0){
      event.preventDefault();
      alert("Invalid number of toasters");
    }
    if(!$('input[name="swiss-army-toasters"]').val() || !$('input[name="swiss-army-toasters"]').val() < 0){
      event.preventDefault();
      alert("Invalid number of swiss army toasters");
    }
    if(!$('input[name="nuclear-powered-toasters"]').val() || !$('input[name="nuclear-powered-toasters"]').val() < 0){
      event.preventDefault();
      alert("Invalid number of nuclear powered toasters");
    }
  });

  $('#reset-button').click(function(){
    $('#order-form')[0].reset();
  })

});
