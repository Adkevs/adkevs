<?php

    class kayit_model extends model {

        function __construct () {

            parent::__construct();

        }

        function kontrolet($tabload,$sutunlarim,$veri) {


            return $this->db->ekle($tabload,$sutunlarim,$veri);


        }




    }



?>