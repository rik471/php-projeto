<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Rick G. Oliveira");
    $cad->setEmail("rikson880@gmail.com");
    $cad->setSenha("2375");

    $cad->rVenda();

    //echo $cad;



?>
