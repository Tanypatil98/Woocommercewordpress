
<div class="res"><?php
      $db=mysqli_connect('localhost','root','', 'wordpress');
       $sql = "SELECT * FROM wp_crudq ";
       $res=mysqli_query($db,$sql);
       $result=mysqli_num_rows($res);
      if (!empty($result)) {
        echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Pid</th>";
                                        echo "<th>Fname</th>";
                                        echo "<th>Lname</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row=mysqli_fetch_assoc($res)){
                                    echo "<tr>";
                                      echo "<td>" . $row['id']. "</td>";
                                        echo "<td>".$row['fname']."</td>";
                                        echo "<td>" . $row['lname'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>";
                                            echo "<button style='
  padding: 0px;margin-right: 5px;
' class='update' data-id='".$row['id']."' data-fname='".$row['fname']."'
data-lname='".$row['lname']."' data-email='".$row['email']."'
data-target='#mymodal' data-toggle='modal'
 title='Update Record' ><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg></button>";
                                            echo "<button style='
  padding: 0px;
' class='delete' data-id='".$row['id']."'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg></button>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                           
      }else{
        echo "No Record is found";
      }
      ?>

<div class="modal" id="mymodal" tabindex="-1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" method="post" action="">
          <div class="form-group">
          <label>Fname:</label>
          <input type="text" name="fname" id="fname"  class="form-control">
        </div>
        <div class="form-group">
          <label>Lname:</label>
          <input type="text" name="lname" id="lname"  class="form-control">
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" name="email" id="email"  class="form-control">
        </div>
        <input type="submit" name="submit" value="Submit">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  jQuery(".delete").click( function() {
     
      var delete_id = jQuery(this).data("id")
      

      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : myAjaxd.ajaxurl  + '?action=crud_delete',
         data : { id : delete_id },
         success: function(response) {
            jQuery("#fetch").load('http://localhost/wordpress/wp-content/themes/twentyseventeen/db.php');
         }
      })   

   })
  jQuery(".update").click( function() {
     
      var update_id = jQuery(this).data("id")
      var update_fname = jQuery(this).data("fname")
      var update_lname = jQuery(this).data("lname")
      var update_email = jQuery(this).data("email")
      console.log(update_id)
      console.log(update_fname)
      console.log(update_lname)
      console.log(update_email)
      jQuery('#mymodal').on('show.bs.modal', function (e) {
      
})
      jQuery('#mymodal #fname').val(update_fname)
      jQuery('#mymodal #lname').val(update_lname)
      jQuery('#mymodal #email').val(update_email)
      /*jQuery.ajax({
         type : "post",
         dataType : "json",
         url : myAjaxd.ajaxurl  + '?action=crud_update',
         data : { id : delete_id },
         success: function(response) {
            jQuery("#fetch").load('http://localhost/wordpress/wp-content/themes/twentyseventeen/db.php');
         }
      }) */  

   })
</script>    
