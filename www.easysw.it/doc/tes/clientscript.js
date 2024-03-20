// JavaScript Document
$(function(){
  
  /*
  POSIZIONO IL FOOTER IN FONDO AL DISPLAY
  */
  var altezza = $(window).height(); // calcolo altezza display
  var menu = 95; // altezza menu + bordo + margine
  var footer = 40; // altezza footer
  var contenuto = (altezza-menu-footer); // calcolo altezza minima del contenuto
  $('#contenuto').css('min-height',contenuto); // assegno
  
});
