<?php

    class kayit extends controllers {

        function __construct () {

            parent::__construct();

            $this->view->goster("sayfalar/index");

            $this->Modelyukle("kayit");

        }



    }



?>