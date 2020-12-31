<?php
    //https://github.com/endroid/qr-code
    //https://github.com/jbroadway/urlify
    //https://github.com/bonus3/php-pix

    include_once("configs.php");
    include_once("../vendor/autoload.php");
    include_once("pix.php");


    if(isset($_GET['valor'])){
        \PhpPix\Pix::generateQrCode(
            email, //Pix key
            nome, //Name
            cidade, //City
            cpf, //Identifier
            $_GET['valor'] //value. Ex.: R$1.234,50 
        );
    }