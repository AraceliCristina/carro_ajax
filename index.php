<?php
    session_start();
    include "conexao.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autonomia de um carro em uma Viagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    
    <?php
        if(isset($_GET['pagina'])) {
            include $_GET['pagina'].'.php';

        }else {
            include 'home.php';
        }
    ?>
</div>

</form>
<?php
    $nome = '';
    $modelo = '';
    $placa = '';
    $origem = '';
    $destino = '';
    $kilometragem = '';
    $litros = '';
    $valor = '' ;

    if(isset($_POST['calcular'])) {
        echo $_POST['nome'];
        echo $_POST['modelo'];
        echo $_POST['placa'];
        echo $_POST['origem'];
        echo $_POST['destino'];
        echo $_POST['kilometragem'];
        echo $_POST['litros'];
        echo $_POST['valor'];
    }
?>

</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

