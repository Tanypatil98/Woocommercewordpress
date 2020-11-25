jQuery(document).ready( function() {
jQuery("#fetch").load('http://localhost/wordpress/wp-content/themes/twentyseventeen/db.php');
   jQuery("#crud").submit( function(e) {
      e.preventDefault(); 
      var fname =  document.getElementById("fname").value;
      var lname =  document.getElementById("lname").value;
       var email =  document.getElementById("email").value;
      if (fname == "" || fname == null) {
jQuery("#header").append('<h6 class="alert alert-danger">Please Fill The FirstName</h6>')
return false;
}
if (lname == "" || lname == null) {
jQuery("#header").append('<h6 class="alert alert-danger">Please Fill The LastName</h6>')
return false;
}
if (email == "" || email == null) {
jQuery("#header").append('<h6 class="alert alert-danger">Please Fill The Email</h6>')
return false;
}
      var dataForm = jQuery(this).serialize();

      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : myAjaxd.ajaxurl + '?action=ajax_crud',
         data : dataForm,
        
      }).complete(function(data) {
               
               jQuery("#header").append('<h6 class="alert alert-success">Your Data Was Successfully Update</h6>')
             jQuery("#fetch").load('http://localhost/wordpress/wp-content/themes/twentyseventeen/db.php');
            var self = window.location.href;
       setTimeout(function(){
      jQuery("#crud").load( self + '#crud');
    }, 500)

         })

   })


})