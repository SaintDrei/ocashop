$(document).ready(function(){
         Materialize.toast('All good!', 4000);
    
    //Materialize inits
    $(".button-collapse").sideNav({closeOnClick: true});
    $('.modal').modal();    
    $('select').material_select();
    $('.button-collapse').sideNav(
    {
        
         menuWidth: 300, // Default is 240
      closeOnClick: true
    }
    );
    $('.collapsible').collapsible();
    
    
 $('.tooltipped').tooltip({delay: 50});
    $('.collapsible').collapsible();
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
    $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
    $('#artgroup').change(function(){
        
    var sel = $('#artgroup').val();
    window.location.href= "reg.php?groupID=" + sel;
    var sors = '../content/images/' + sel + '/logo.jpg';    
	$('#changing-img').attr('src', sors);
        
});
    $('#artgroup').change(function(){
        
    var sel = $('#artgroup').val();
    window.location.href= "reg.php?groupID=" + sel;
    var sors = '../content/images/' + sel + '/logo.jpg';    
	$('#changing-img').attr('src', sors);
        
});
    
    // Event Image changer 
    $('#artgroup').change(function(){
        
    var sel = $('#artgroup').val();
    var sors = '../content/images/' + sel + '/logo.jpg';    
	$('#changing-img').attr('src', sors);
        
}); $('#agroup').change(function(){
        var sel $("#agroup").val();
        $("#agrp").val(sel);
});
    //register create Username
       var fn = '';
    var ln = '';
   
  
    
    $('#lastName').change(function(ln){
          fn = $('#firstName').val();
    ln = $('#lastName').val();
            var un = fn + "." + ln;
 $("#username").val(un);
        
});
    var logerror = $("#logerror").html();
    
    if (logerror == "bad"){
         Materialize.toast('Wrong username or password!', 4000);
    }
    
    //populate subgroup
    $('#artgroup').change(function(ln){
       
    });
    
   
    
});

 // Renders Event Image Upload
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#event-img')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }