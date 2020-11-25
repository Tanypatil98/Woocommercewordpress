jQuery(document).ready( function() {

   jQuery("#profile_update").submit( function(e) {
      e.preventDefault(); 
      var name =  document.getElementById("username").value;
       var email =  document.getElementById("email").value;
      if (name == "" || name == null) {
jQuery("#header").append('<h6 class="alert alert-danger">Please Fill The Name</h6>')
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
         url : myAjax.ajaxurl + '?action=ajax_add',
         data : dataForm,
        
      }).complete(function(data) {
               
               jQuery("#header").append('<h6 class="alert alert-success">Your Data Was Successfully Update</h6>')
              
         })

   })

})