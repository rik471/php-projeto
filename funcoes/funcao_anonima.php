<h1>Função Anonima</h1><p><?php

  function teste($callback){

    //processo lento

    $callback();

  }

  teste(function(){

    echo "Process Finished";

  });
 ?></p>

 <h1>Função Anonima 02</h1><p><?php

  $fa = function($a){

    var_dump($a);

  };

  $fa("Funcionou aeee");

 ?></p>
