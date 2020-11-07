<?php

spl_autoload_register(function ($classname)

{

    $dir=__DIR__.'/lbs/';
    $dosyayolu=$dir.$classname.'.php';

    include ($dosyayolu);
});


require "config/genel.php";
require "config/database.php";


$boots= new boots();

?>