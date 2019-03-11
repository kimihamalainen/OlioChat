<!DOCTYPE html>
<html>
  <head>
    <title>Tsätti</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <section>
    <h1>Chat</h1>
    <h2>Kirjoita uusi viesti ja <br> paina Lähetä-nappia</h2>
    <form action="?toiminto=lahetys" method="post">
      <input type="text" name="viesti">
      <input type="submit" value="Lähetä">
    </form>
    </section>
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