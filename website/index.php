<?php

include 'includes/nav.php';

?>
  	<title>TicketFast | Home</title>
  <div class="container">                                                                                     
  <div class="table-responsive">          
  <table class="table">
  	<thead>
      <tr>
        <th colspan="4"> 
          <form id="searchbox" action="">
    				<input id="search" type="text" placeholder="Type here">
    				<input id="submit" type="submit" value="Search">
    			</form>	
        </th>
    	</tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <input type="image"src="Maroon5.jpg" width="200" height="300" id="modalbtn"></td>
          <div class="modal fade" id="myModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modeal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="modal">&times;</button>
                  <h1 class="modal-tittle" id="myModalLabel">Maroon 5 Comes Down Under </h1>
              </div>
              <div class="modal-body">
                <p>Maroon 5 comes back down under in 2017. More information to be released nearing event. Register to TicketFast to receive notification on event.</p>
              </div>
              <div class="model-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div>
        <td>Event 2</td>
        <td>Event 3</td>
        <td>Event 4</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>Event 5</td>
        <td>Event 6</td>
        <td>Event 7</td>
        <td>Event 8</td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>
  <?php include 'testModal.php';?>
  <script>
   /* $(document).ready(function(){
      $("#event1").click(function(){
        $("#myModal").modal();
      });
    });*/
    
$( ".close" ).click(function(){
  $(".modal").hide();
});
  </script>

 
<?php

include 'includes/footer.php';

?>
 
 






</body>
</html>