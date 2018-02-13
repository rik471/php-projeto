<?php

$id = (isset($_GET["id"]))?$_GET["id"]:8;

if (!is_numeric($id) || strlen($id) > 5) {

  exit("Gotcha!");

}

$conn = mysqli_connect("127.0.0.1", "root", "aaaaaa", "dbphp7");

$query = "SELECT * FROM TESTE WHERE IDUSER = $id";

$exec = mysqli_query($conn, $query);

while ($result = mysqli_fetch_object($exec)) {

  echo $result->USERLOGIN . "<br>";

}

?>
