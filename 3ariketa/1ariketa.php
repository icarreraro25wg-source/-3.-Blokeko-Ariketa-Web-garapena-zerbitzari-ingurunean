<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class korrikalari{
        private $izena;
        private $kodea;
        private $dembora= [];
        public function __construct($izena,$kodea) {
            $this->izena = $izena;
            $this->kodea = $kodea;
        }
        public function getIzena(){
            return $this->izena;
        }
       
         public function getKodea(){
            return $this->kodea;
        }
     
         public function getDembora(){
            return $this->dembora;
        }
      
        public function lasterketagehitu($dembora){
            if (count($this->dembora)>=5){
                throw new Exception("ezin du lasterketan gehiago jokatu",1);
            }
            if ($dembora < 5){
                throw new Exception("ezin du 5 lasterketa 5 segundu edo gutxiago duratu ", 1);
            }
            $this->dembora[] = $dembora;
        }
    }
    class txapelketa {
        private $korrikalariKodeak = [];

        public function korrikalariagehitu($korrikalari){
            $korrikalariKodeak[$korrikalari->getKodea()] = $korrikalari;
        }

        public function getKorrikalariKodeak() {
        return $this->korrikalariKodeak;
    }
    
        public function gehitulasterketakorrikalariari($kodea, $dembora){
         if (isset($this->korrikalariKodeak[$kodea])) {
        $this->korrikalariKodeak[$kodea]->lasterketaGehitu($dembora);
    } else {
        throw new Exception("Ez da korrikalaria aurkitu kode honekin: $kodea");
    }
        }

        public function batasBestekoa(){
            $kopurua = 0;
            $batasbeteko = 0;
            foreach ($this->korrikalariKodeak as $korrikalari) {
            $dembora = $korrikalari->getDembora();  
            if($dembora[0]){
                    $batasBestekoa += $dembora[0];
                    $kopurua;
               }
            }
            if($kopurua > 0){
                return $kopurua / $batasBestekoa;
            }
            else{
                return 0;
            }
        }

        public function bizkorrena(){
            $bizkorrena = null;
            $denboraTxikiena  = null;
            foreach ($this->korrikalariKodeak as  $korrikalari) {
            $dembora = $korrikalari->getDembora();
                if (count($dembora) > 0){
                $minimoa = min($dembora);
                    if($denboraTxikiena === null || $minimoa < $denboraTxikiena){
                        $denboraTxikiena  = $minimoa;
                        $bizkorrena = $korrikalari;
                    }
                }
            }
            return $bizkorrena;
        }

        public function korrikalariobeak(){
            $korrikalaria = [];
            foreach ($this->korrikalariKodeak as $korrikalari) {
            $dembora = $korrikalari->getDembora();
                if (isset($dembora[0]) && isset($dembora[1])) {
                if ($dembora[0] > 15 && $dembora[1] > 15) {
                    $emaitza[] = $korrikalari->getIzena();
                }
            }
            }
            return $korrikalaria;
        }
        public function eLetraHasita(){
            $korrikalaria = [];
            foreach ($this->korrikalariKodeak as $korrikalari) {
            $izena = $korrikalari->getIzena();
                if($izena[1] == "e"){
                    $korrikalaria[] = $izena;
                }
            }
            return $korrikalaria;
        }

    } 

    ?>
</body>
</html>