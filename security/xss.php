<form method="post">
  <input type="text" name="busca">
  <button type="submit">Send!</button>
</form>

<?php

  if (isset($_POST["busca"])) {

    echo strip_tags($_POST["busca"]);


  }

 ?>
