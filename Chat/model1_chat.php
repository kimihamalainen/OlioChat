<?php
# Mallit kirjoittavat tietoja tiedostoon
# ja toteuttavat käsittelysääntöjä 
class Malli {
    private $tiedosto = "data1_chat.txt";
    public function viestit() {
        if (file_exists($this->tiedosto)) 
		{ 
			return file($this->tiedosto);
        } 
		else 
		{
			return array();
        }
    }
    public function lisaa($viesti) {
        $viesti = date("h.i.s. ") . $viesti;
        file_put_contents($this->tiedosto, "{$viesti}\n", FILE_APPEND);
    }
}
?>


