<?php

class database extends PDO {

    protected $dizi;


    function __construct() {

        parent::__construct('mysql:host=localhost;dbname=blog','root','root');


    }
        function ekle ($tabloisim,$sutunadlari,$veriler) {

            $sutunsayi=count($sutunadlari);

//            echo   $sutunsayi;

            for ($i=0; $i<$sutunsayi; $i++) :

                $this->dizi.='?,';

            endfor;

            $this->dizi=rtrim($this->dizi,',');

            $sonhal=join(",",$sutunadlari);

            $sorgu=$this->prepare('insert into '.$tabloisim.' ('.$sonhal.') VALUES ('.$this->dizi.')');


            if ($sorgu->execute($veriler)) :

                return "oldu";

            else :

                return "olmadı";

            endif;


        }

}




?>