<?php 
class film{
    private $izena;
    private $ISAN;
    private $urtea;
    private $puntuazioa;
    
       function __construct($isan, $izena, $urtea, $puntuazioa) {
        $this->ISAN = $isan;
        $this->izena = $izena;
        $this->urtea = $urtea;
        $this->puntuazioa = $puntuazioa;
    }

     function kodea() {
        return "    ['isan' => " . var_export($this->ISAN, true)
             . ", 'izena' => " . var_export($this->izena, true)
             . ", 'urtea' => " . var_export($this->urtea, true)
             . ", 'puntuazioa' => " . var_export($this->puntuazioa, true) . "],";
    }
}
?>