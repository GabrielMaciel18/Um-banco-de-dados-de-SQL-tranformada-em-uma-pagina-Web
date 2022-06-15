<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>

<style>
 
a{
text-decoration: none;
}
h3{

    text-align: center;
}
</style>
</head>
<body>
<?php
    require_once('config.php');

    $id=$_GET['id'];
 
    $sth = $pdo->prepare("SELECT id, nome_completo from cliente WHERE id = :id");
    $sth -> bindValue(':id',$id, PDO::PARAM_STR);

    $sth->execute();

    $reg = $sth->fetch(PDO::FETCH_OBJ);
    $nome = $reg->nome_completo;
?>
<h3>Tem certeza de que deseja excluir o registro <?=$id?>?</h3>
<div align="center">
    <br>
 <h5>   Nome: <?=$nome?><br> </h5>

    <form method="post" action="">
    <input name="id" type="hidden" value="<?=$id?>">
    <input name="enviar" type="submit" value="Excluir!">
    </form>
</div>

<?php
    if(isset($_POST['enviar'])){
    $id = $_POST['id'];

        $sql = "DELETE FROM  cliente WHERE id = :id";
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);   
        if($sth->execute()){
            print "<script>alert('Registro excluído com sucesso.');location='registro.php';</script>";
        }else{
            print "Erro ao exclur o registro.<br><br>";
        }
    }


?>
<br>
<br>
<br>
<h5><a href="registro.php ">Voltar para tela inicial</a></h5>






</body>
</html>