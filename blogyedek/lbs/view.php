<?php

class view {

    function __construct () {
    }

    public function goster($dosyaad) {

    require "views/".$dosyaad.'.php';

    }

}



?>