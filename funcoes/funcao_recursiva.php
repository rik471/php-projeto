<?php
  require_once("../config.php");

  //hierarquia
  $hierarquia_mafia = array(
      array(
          'ncargo' => 'Capo',
          'subcargo' => array(
            //cabeças
            array(
              'ncargo'=> 'Consiliegre'
            )//fim cabeçcas
          )
      )//associados
      array(
          'ncargo' => 'Associados',
          'subcargo' => array(
            array(
                'ncargo' => 'Traficantes',
                'subcargo' => array(
                  array(
                      'ncargo' =>'Olheiros'
                  )
                )
            )//fim associados
            array(
                //capitao
                'ncargo'=> 'Capitao',
                'subcargo' => array(
                    array(
                        'ncargo' => 'Soldados de Rua',
                        'subcargo' => array(
                        'ncargo' => 'subcapitao'
                        )
                    )
                )
            )
          )
      )//fim capitao
  );

  function mafia($cargos){

    $html = "<ul>";

      foreach ($cargos as $cargo){

        $html .= "<li>";
        $html .=  $cargo['ncargo'];
        if (isset($cargo['subcargo']) && count($cargo['subcargo']) > 0){
          $html .= mafia($cargo['subcargo']);
        }
        $html .= "</li>";
      }
    $html .= "</ul>";
    return $html;
  }

  echo mafia($hierarquia_mafia);
?>
