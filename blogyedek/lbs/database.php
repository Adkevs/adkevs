<?php

class database extends PDO {


    function __construct() {

        parent::__construct('mysql:host=localhost;dbname=blog','root','root');


    }


}




?>