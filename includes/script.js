$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
    Materialize.toast('Script.js loaded', 4000);
    $(".dropdown-button").dropdown({
        inDuration: 300,
        outDuration: 225,
        hover:true
    });    
    
});