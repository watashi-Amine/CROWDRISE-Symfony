$(function(){
$('#loginform').submit(function(e){
    return false;
  });
  
  $('#logintrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});


$(function(){
$('#inscriptionform').submit(function(e){
    return false;
  });
  
  $('#inscriptiontrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});