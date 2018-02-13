<?php 
	
	$folder = "arquivos";
	$permissao = "0555";

	if (!is_dir($folder)) mkdir($folder, $permissao);
	
	echo "Diretório criado!";
	

 ?>