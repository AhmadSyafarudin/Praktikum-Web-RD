<?php

    class struk {
        var int $mangga;
        var int $jambu;
        var int $salak;
        var int $jmlmangga;
        var int $jmljambu;
        var int $jmlsalak;
        var int $total;

        public function __construct($mangga, $jambu, $salak){
            $this->mangga = 15000 * $mangga;
            $this->jambu = 13000 * $jambu;
            $this->salak = 10000 * $salak;
            $this->jmlmangga = $mangga;
            $this->jmljambu =  $jambu;
            $this->jmlsalak = $salak;
            $this->total = $this->mangga + $this->jambu + $this->salak; 

        }

    }

    if (isset($_POST['submit'])) {
        $mangga = $_POST['mangga'];
        $jambu = $_POST['jambu'];
        $salak = $_POST['salak'];

        $struk = new struk($mangga, $jambu, $salak);
    }

?>