<?php
include "conexao.php";

if(isset($_GET['editar'])) {
        $sql_editar_autonomia= "UPDATE autonomia set nome=nome WHERE placa = :placa";
        $autonomia_editar_prepara = $conn->prepare($sql_editar_autonomia);
        $autonomia_editar_prepara->execute(array("placa"=>$_GET['placa']));
        echo "Dados Atualizados com sucesso";
}

    //consulta de dados
    $sql = "SELECT * FROM autonomia where placa = :placa";
    $autonomia_prepara = $conn->prepare($sql);
    $autonomia_prepara->execute(array("placa" => $_GET['placa']));
    $autonomia = $autonomia_prepara->fetch();

    
 ?>
    <form method ="post">
    <table class="table">
    <tr>
        <td>
        Nome do Motorista
        </td>
        <td>
            <input type="text" name= "nome" class="form-control" id="floatingInput" value="<?php echo $autonomia['nome']; ?>">
            
        </td>
    </tr>
    <tr>
        <td>
        Modelo do Carro
        </td>
        <td>
            <input type="text" name= "modelo" class="form-control" id="floatingInput" value="<?php echo $autonomia['modelo']; ?>">
        </td>
    </tr>
    <tr>
        <td>
       Placa do Carro
        </td>
        <td>
            <input type="text" name= "placa" class="form-control" id="floatingInput" value="<?php echo $autonomia['placa']; ?>">
        </td>
    </tr>
    <tr>
        <td>
        Local de Origem
        </td>
        <td>
            <input type="text" name= "origem" class="form-control" id="floatingInput" value="<?php echo $autonomia['origem']; ?>">
        </td>
    </tr>
    <tr>
        <td>
        Local de Destino
        </td>
        <td>
            <input type="text" name= "destino" class="form-control" id="floatingInput" value="<?php echo $autonomia['destino']; ?>">
        </td>
    </tr>
    <tr>
        <td>
        Kilometragem Percorrida
        </td>
        <td>
            <input type="text" name= "kilometragem" class="form-control" id="floatingInput" value="<?php echo $autonomia['kilometragem']; ?>">
        </td>
    </tr>
    <tr>
        <td>
        Litros de Combustível Gastos
        </td>
        <td>
            <input type="text" name= "litros" class="form-control" id="floatingInput" value="<?php echo $autonomia['litros']; ?>">
        </td>
    </tr>
    <tr>
        <td>
        Valor do Combustível Atual
        </td>
        <td>
            <input type="text" name= "valor" class="form-control" id="floatingInput" value="<?php echo $autonomia['valor']; ?>">
        </td>
    </tr>
    </table>

    <input type="submit" class="btn btn-primary" name="salvar" value="Salvar">&nbsp;
</form>