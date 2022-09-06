<?php
    session_start();
    include "conexao.php"
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
<h1><p class="text-center">Cadastro da Viagem</p></h1>
<br><br>

<?php
    if(isset($_POST['enviar'])) {
        $sql_autonomia_salvar= "INSERT into autonomia
                            (nome, modelo, placa, origem, destino, 
                            kilometragem, litros ,valor)
                            VALUES (:nome, :modelo, :placa, :origem, :destino, 
                            :kilometragem, :litros ,:valor)
        ";
        $autonomia_salvar_prepara = $conn->prepare($sql_autonomia_salvar);
        if ($autonomia_salvar_prepara->execute(array(
            "nome" => $_POST['nome'],
            "modelo" => $_POST['modelo'],
            "placa" => $_POST['placa'],
            "origem" => $_POST['origem'],
            "destino" => $_POST['destino'],
            "kilometragem" => $_POST['kilometragem'],
            "litros" => $_POST['litros'],
            "valor" => $_POST['valor']
        
        ))) {
            echo '
                <br>
                <div class=\"alert alert-success\">
                    Formulário cadastrado com sucesso!
                </div>
            ';
        }
    }else {

    }
    ?>
      
    <form method="post" class= "container">
        <div class="mb-3">
        <label type= "text" class="form-label">Nome do Motorista</label>
        <input type="text" class="form-control" id="nome"  name="nome">
        <label type= "text" class="form-label">Modelo do Carro </label>
        <input type="text" class="form-control" id="modelo" name= "modelo">
        <label type= "text" class="form-label">Placa do Carro </label>
        <input type="text" class="form-control" id="placa" name= "placa">
        <label type= "text" class="form-label">Local de Origem </label>
        <input type="text" class="form-control" id="origem" name= "origem">
        <label type= "text" class="form-label">Local de Destino </label>
        <input type="text" class="form-control" id="destino" name= "destino">
        <label type= "text" class="form-label">Kilometragem Percorrida </label>
        <input type="text" class="form-control" id="kilometragem" name= "kilometragem">
        <label type= "text" class="form-label">Litros de Combustível Gastos </label>
        <input type="text" class="form-control" id="litros" name= "litros">
        <label type= "text" class="form-label">Valor do Combustível Atual</label>
        <input type="text" class="form-control" id="valor" name= "valor">
        <br><br>
      

        <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">&nbsp;
        <input type="submit" class="btn btn-warning" name="calcular" value="Calcular">&nbsp;
        <input type="reset" class="btn btn-success" name="limpar" value="Limpar">
       
        <p id="pmostra"></p> 


        <a href="home.php">Voltar</a>

       

        
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

