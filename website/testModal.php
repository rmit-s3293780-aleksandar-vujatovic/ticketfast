
	<link href="modalCss.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div id="TheModalTest" class="modal">

<div class="modal-content">
    <div class="modal-header">
        <span class="close" onclick="closeWindow()">X</span>
    </div>
    <div>
        <img src="Maroon5.jpg" height=230 width=165>
    </div>
    
    <p class="desc">
        Maroon 5 is an American pop rock band that originated in Los Angeles, California.[9][10] It currently consists of lead vocalist Adam Levine, 
        keyboardist and rhythm guitarist Jesse Carmichael, bassist Mickey Madden, lead guitarist James Valentine, drummer Matt Flynn, and keyboardist PJ Morton.

        Original members Adam Levine, Jesse Carmichael, Mickey Madden and drummer Ryan Dusick first came together as Kara's Flowers in 1994, while they were still in high school. 
        The band self-released an album called We Like Digging?, then signed to Reprise Records and released the album The Fourth World in 1997. After the album garnered a tepid response, 
        the band parted ways with the record label and the members attended college.
        
        
    </p>
    <div class="modal-footer">
        <h3>BOOK NOW</h3>
    </div>
</div>      
          <script>
              //get modal
              var Testmodal = document.getElementById('TheModalTest');
              //get button that opens modal
              var modalbtn = document.getElementById('modalbtn');
              //Open modal when btn click
              modalbtn.onclick = function(){
                  Testmodal.style.display = "block";
              }
          </script>