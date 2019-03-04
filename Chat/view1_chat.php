<!DOCTYPE html>
<html>
  <head>
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form action="?toiminto=lahetys" method="post">
      <input type="text" name="viesti">
      <input type="submit" value="Send">
    </form>
  <div id="chatbox">
    <?php
    // tämä on käyttöliittymä  ja näkymä tietoihin 	
      if (empty($this->viestit)) {
          echo "Chatissa ei ole viestejä.";
      } else {
      $lkm=0;    
      foreach ($this->viestit as $viesti) {
            $lkm=$lkm+1; // laskee rivien määrän määrän   
        echo " " . htmlspecialchars($viesti) . "<br>";
        include("model2_lkm.php"); // model2 -rajoittaa rivien määrää 		
          }
      }
      ?>
  </div>
  </body>
</html>