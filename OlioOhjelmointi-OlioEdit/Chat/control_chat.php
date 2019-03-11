<?php
# Kontrolloi sovellusta:
# Kolme funktiota Malli Lista Lähetys
class Ohjain {
    private $malli;
    public function __construct() {
        $this->malli = new Malli();
    }

    public function lista() {
        $this->viestit = $this->malli->viestit();
		
        include("view1_chat.php"); // huomaa erot / vai \
    }

    public function lahetys() {
        $this->malli->lisaa($_POST["viesti"]);
        header("Location: index.php?toiminto=lista");
    }
}
?>