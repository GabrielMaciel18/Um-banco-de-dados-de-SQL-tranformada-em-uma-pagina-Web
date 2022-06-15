<?php 
    require_once('config.php');

    $id=$_GET['id'];

    $sth = $pdo->prepare("SELECT id, nome_completo, usuario, cpf, rg, data_nascimento, logradouro, numero, complemento, bairro from cliente WHERE id = :id");
    $sth->bindValue(':id', $id, PDO::PARAM_STR); // No select e no delete basta um bindValue
    $sth->execute();

    $reg = $sth->fetch(PDO::FETCH_OBJ);
    $id = $reg->id;
    $nome_completo = $reg->nome_completo;
    $cpf = $reg->cpf;
    $rg = $reg->rg;
    $data_nascimento = $reg->data_nascimento;
    $logradouro = $reg->logradouro;
    $usuario = $reg->usuario;   
    $numero = $reg->numero;
    $complemento = $reg->complemento;
    $bairro = $reg->bairro;
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilo_editar.css" rel="stylesheet">

</head>
<body>


<div align="center">
    <form method="post" action="editar_cliente.php">
    ID<input type="number" name="id" value="<?=$id?>">
    <br><br>

    Nome<input type="text" name="nome_completo" value="<?=$nome_completo?>">
    <br><br>

    CPF<input type="number" name="cpf" value="<?=$cpf?>">
    <br><br>

    RG<input type="number" name="rg" value="<?=$rg?>">
    <br> <br>

    Data de Nascimento<input type="date" name="data_nascimento" value="<?=$data_nascimento?>">
    <br><br>

    Usuario<input type="text" name="usuario" value="<?=$usuario?>"><br>
    
    <input name="id" type="hidden" value="<?=$id?>"> <br>

    Logradouro<input type="text" name="logradouro" value="<?=$logradouro?>"><br>
    <input name="id" type="hidden" value="<?=$id?>"> <br>

    Número<input type="numberS" name="numero" value="<?=$numero?>"><br>
    <input name="id" type="hidden" value="<?=$id?>"> <br>

    Complemento<input type="text" name="complemento" value="<?=$complemento?>"><br>
    <input name="id" type="hidden" value="<?=$id?>"> <br>

    Bairro<input type="text" name="bairro" value="<?=$bairro?>"><br>
    <input name="id" type="hidden" value="<?=$id?>">
<br>
        <input name="enviar" type="submit" value="Editar">
    </form>
</div>

<?php

if(isset($_POST['enviar'])){
    $id = $_POST['id'];
    $nome_completo = $_POST['nome_completo'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nascimento = $_POST['data_nascimento'];
    $usuario = $_POST['usuario'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    

    $sql = "UPDATE cliente SET nome_completo = :nome_completo, usuario = :usuario, cpf = :cpf, rg = :rg, data_nascimento = :data_nascimento, logradouro = :logradouro, numero = :numero, complemento = :complemento, bairro = :bairro WHERE id = :id";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
    $sth->bindParam(':nome_completo', $_POST['nome_completo'], PDO::PARAM_INT);   
    $sth->bindParam(':cpf', $_POST['cpf'], PDO::PARAM_INT);
    $sth->bindParam(':rg', $_POST['rg'], PDO::PARAM_INT);
    $sth->bindParam(':data_nascimento', $_POST['data_nascimento'], PDO::PARAM_INT);
    $sth->bindParam(':usuario', $_POST['usuario'], PDO::PARAM_INT);
    $sth->bindParam(':logradouro', $_POST['logradouro'], PDO::PARAM_INT);
    $sth->bindParam(':numero', $_POST['numero'], PDO::PARAM_INT);
    $sth->bindParam(':complemento', $_POST['complemento'], PDO::PARAM_INT);
    $sth->bindParam(':bairro', $_POST['bairro'], PDO::PARAM_INT);
   if($sth->execute()){
        print "<script>alert('Registro alterado com sucesso.');location='registro.php';</script>";
    }else{
        print "Erro ao editar o registro.<br><br>";
    }
}
?>
<br>
<br>
<br>

<h3> <a href="registro.php">Voltar </a> </h3>

</body>
</html>