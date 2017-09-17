
	<link href="modalCss.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div id="TheModalTest" class="modal">

<div class="modal-content">
    <div class="modal-header">
        <span class="close" onclick="closeWindow()">X</span>
    </div>
    <div>
       <?php echo '<img style="width:15em; height:17em;" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'; ?>
    </div>
     <?php // echo '<p class="desc">'.$row["description"].'</p>' ?>
    <div class="modal-footer">
        <h3>BOOK NOW</h3>
    </div>
</div>    
</div>
          <script>
              //get modal
              var Testmodal = document.getElementById('TheModalTest');
              //get button that opens modal
              //var modalbtn = document.getElementById('modalbtn');
              var modalbtn = document.getElementsByClassName('modalBtn');
              console.log("Length: " + modalbtn.length);
              //Open modal when btn click
              for (var i = 0; i < modalbtn.length+1; i++ ) {
                  console.log("I IS: " + i);

                     modalbtn[i].onclick = function(){
                    console.log("MODAL IS: " + modalbtn[i]);
                  Testmodal.style.display = "block";
                 
              }
        }

          </script>