<?php
    session_start();
    include "conexao.php"
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="JavaScript">

    function fDeletar (placa) {
        let acao = "deletar.php?deletar=deletar&placa="+placa;
        console.log(acao);
        $.get(acao,function(retorno){
            alert(retorno);
            location.reload();
        });
    }

    function fEditar (placa) {
        let editar = "editar.php?placa="+placa;
        $.get(editar,function(retorno){
            //console.log(retorno);
            $('#form').html(retorno);
        });
    }
    function fSalvar (placa) {
        let salvar = "salvar.php?salvar=salvar&placa="+placa;
        $.get(salvar,function(retorno){
            //console.log(retorno);
            $('#form').html(retorno);
        });
    }

   
</script> 
<h1><p class="text-center">Lista de Cadastros</p></h1>

<div id="form"></div>
<br><br>

<?php
    $sql = "SELECT * FROM autonomia";
    $autonomia_prepara = $conn->prepare($sql);
    $autonomia_prepara->execute();

 ?>   
<table class="table table-success table-striped">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
    <form method="post" class= "container">

    <thead>
        <tr>
            <th>Nome do Motorista</th>
            <th>Modelo do Carro</th>
            <th>Placa do Carro</th>
            <th>Local de Origem </th>
            <th>Local de Destino </th>
            <th>Kilometragem Percorrida</th>
            <th>Litros de Combustível Gastos</th>
            <th>Valor de Combustível atual</th>
            <th> Ações </th>
        </tr>
    </thead>
    <br><br>


    <tbody>

        <?php
        while ($carro= $autonomia_prepara->fetch()) {
            echo"<tr>";
            echo"<td>".$carro['nome']."</td>";
            echo"<td>".$carro['modelo']."</td>";
            echo"<td>".$carro['placa']."</td>";
            echo"<td>".$carro['origem']."</td>";
            echo"<td>".$carro['destino']."</td>";
            echo"<td>".$carro['kilometragem']."</td>";
            echo"<td>".$carro['litros']."</td>";
            echo"<td>".$carro['valor']."</td>";
            echo "
                <td>
                    <a class=\"btn btn-info\" onclick=\"fEditar('".$carro['placa']."')\">Editar</a>
                    <a class=\"btn btn-danger\" onclick=\"fDeletar('".$carro['placa']."')\">Deletar</a>
                </td>
            ";
            echo"</tr>";


        }
    ?>
          
</table>

    <a href="home.php">Voltar a pagina inicial</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


            









