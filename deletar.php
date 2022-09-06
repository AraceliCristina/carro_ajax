<?php
include "conexao.php";

if(isset($_GET['deletar'])) {
        $sql_delete_autonomia= "DELETE FROM autonomia WHERE placa = :placa";
        $autonomia_delete_prepara = $conn->prepare($sql_delete_autonomia);
        $autonomia_delete_prepara->execute(array("placa"=>$_GET['placa']));
        echo "Excluido com sucesso! ";
}
 ?>