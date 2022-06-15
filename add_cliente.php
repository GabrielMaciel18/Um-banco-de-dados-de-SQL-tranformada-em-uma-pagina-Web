<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo_add" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Domument</title>
    <link href="css/estilo_add.css" rel="stylesheet">

    </head>
    <body>
<div align = "center">
    <form method="post" action="add_cliente.php">

        Id <input type="number" name="id">
<br><br>
        Nome <input type="text" name="nome_completo" >
<br><br>
        CPF <input  type="number" name="cpf">
<br><br>
        RG <input type="number" name="rg" >
<br><br>
        Data de Nascimento <input type="date" name="data_nascimento">
<br><br>
        Usuário<input type="text" name="usuario">
<br><br>
        Logradouro <input type="text" name="logradouro">
<br><br>
        Número<input type="text" name="numero">
<br><br>
        Complemento<input type="text" name="complemento">
<br><br>
        Bairro<input type="text" name="bairro">
 <br><br>

        <input name="enviar" type="submit" value="cadastrar">
    </form>
</div>

<?php 
    require_once('config.php');
        if(isset($_POST['enviar'])){

        $id=$_POST['id'];
        $nome_completo=$_POST['nome_completo'];
        $cpf=$_POST['cpf'];
        $rg=$_POST['rg'];
        $data_nascimento=$_POST['data_nascimento'];
        $usuario=$_POST['usuario'];
        $logradouro=$_POST['logradouro'];
        $numero=$_POST['numero'];
        $complemento=$_POST['complemento'];
        $bairro=$_POST['bairro'];
    

        try{
    $stmte = $pdo->prepare("INSERT INTO cliente(
    id,nome_completo,cpf,rg,data_nascimento,usuario,
    logradouro,numero,complemento,bairro)
     VALUES(?,?,?,?,?,?,?,?,?,?)");
    
    $stmte -> bindParam(1, $id, PDO::PARAM_STR);
    $stmte -> bindParam(2, $nome_completo, PDO::PARAM_STR);
// fazer isso acima em todos
    $stmte -> bindParam(3, $cpf, PDO::PARAM_STR);
    $stmte -> bindParam(4, $rg, PDO::PARAM_STR);
    $stmte -> bindParam(5, $data_nascimento, PDO::PARAM_STR);
    $stmte -> bindParam(6, $usuario, PDO::PARAM_STR);
    $stmte -> bindParam(7, $logradouro, PDO::PARAM_STR);
    $stmte -> bindParam(8, $numero, PDO::PARAM_STR);
    $stmte -> bindParam(9, $complemento, PDO::PARAM_STR);
    $stmte -> bindParam(10, $bairro, PDO::PARAM_STR);

    $executa = $stmte->execute();

    if($executa){
        echo 'Dados inseridos com sucesso.';
        header('location: registro.php');
    }else{
        echo "Erro ao inserir dados.";
    }
        
        }catch(PDOException $e){
        echo $e->GetMessage();
     }    
    }

?>
<br><br><br>
<h5><a href="registro.php"> Voltar para tela inicial</a> </h5>

</body>
</html>