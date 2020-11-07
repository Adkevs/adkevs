<?php

    class kayit extends controllers {

        function __construct () {

            parent::__construct();

            $this->view->goster("sayfalar/kayit");

            $this->Modelyukle("kayit");

        }
        function kontrol () {

            $ad=$_POST["ad"];
            $soyad=$_POST["soyad"];
            $yas=$_POST["yas"];


       $sonuc=$this->model->kontrolet("kullanicilar",array("ad","soyad","yas"),array($ad,$soyad,$yas));

            $this->view->mesaj=$sonuc;
            $this->view->goster("sayfalar/sonuc");
        }





    }



?>