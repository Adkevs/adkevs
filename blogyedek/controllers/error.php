<?php

    class hata  extends controllers {

        function __construct () {

            parent::__construct();

            $this->view->mesaj="Değişkenle gelen mesaj";
            $this->view->goster("hata/index");
        }

    }



?>