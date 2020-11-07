<?php

    class controllers {

        function __construct () {


            $this->view = new view ();
        }

        function Modelyukle ($name) {

        $yol='model/'.$name.'_model.php';

        if (file_exists($yol)) :

    require $yol;

            $modelsinifname=$name.'_model';

        $this->model=new $modelsinifname ();

            endif;



        }


    }



?>