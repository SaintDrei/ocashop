$(document).ready(function(){
         Materialize.toast(' good!', 4000);
    
    
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
