<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

//$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

echo "Validando.....";

//$conn->rollback();

//echo "Exclusão não autorizada";
$conn->commit();

echo "Exclusão autorizada";



 ?>