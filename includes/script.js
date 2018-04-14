$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50}); 
    $(".dropdown-button").dropdown({
        inDuration: 300,
        outDuration: 225,
        hover:true,
        constrainWidth:false,
        alignment:'right',
        belowOrigin:true
    });
    $('.tooltipped').tooltip({delay: 50});
    
     Materialize.toast('I am a toast!', 4000);
  
    
});