<?php 

$name = "imagens";

if (!is_dir($name)) {
	
	mkdir($name);
	echo "Diretorio $name criado com sucesso!";
}else {

	echo "Diretorio já Existente";
}


 ?>