<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "darkside");

  $stmt = $conn->prepare("SELECT * FROM dbphp7.TESTE ORDER BY USERPASS");

  $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($results as $row) {

      foreach ($row as $key => $value) {

        echo "<b>".$key.": </b>".$value."<br>";

      }
      echo "_______________________________________<br><br>";

  }

?>
