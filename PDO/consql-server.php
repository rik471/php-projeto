<?php


$conn = new PDO("sqlsrv:Database=dbphp7;Server=localhost;ConnectionPooling=0", "SA", "0507Rick");


$stmt = $conn->prepare("SELECT * FROM dbphp7.dbo.users ORDER BY DT;");


$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($results);

?>
