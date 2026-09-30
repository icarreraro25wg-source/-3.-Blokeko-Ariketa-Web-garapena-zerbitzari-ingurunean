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
    

    ?>
</body>
</html>