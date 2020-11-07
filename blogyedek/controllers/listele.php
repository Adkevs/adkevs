<?php

    class listele extends controllers {

        function __construct () {

            parent::__construct();


            $this->view->goster("sayfalar/index");

            $this->Modelyukle("listele");
        }



    }



?>