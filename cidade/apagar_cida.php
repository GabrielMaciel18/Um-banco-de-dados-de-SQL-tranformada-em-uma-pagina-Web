<?php
    require_once('config.php');

    $id=$_GET['id'];
    $id=$_GET['nome'];

    $sth = $pdo->prepare("SELECT id, nome from cidade WHERE id = :id");
    $sth->bindValue(':id', $id, PDO::PARAM_STR);

    $sth = $pdo->prepare("SELECT nome, id from cidade WHERE nome = :nome");
    $sth->bindValue(':nome', $nome, PDO::PARAM_STR);

    $sth->execute();

    $reg = $sth->fetch(PDO::FETCH_OBJ);
    $nome = $reg->nome;
?>
<h3>Tem certeza de que deseja excluir o registro <?=$id?>?</h3>
<div align="center">
    ID: <?=$id?><br>
    Nome: <?=$nome?><br>

    <form method="post" action="">
    <input name="id" type="hidden" value="<?=$id?>">
    <input name="id" type="hidden" value="<?=$nome?>">
    <input name="enviar" type="submit" value="Excluir!">
    </form>
</div>

<?php
    if(isset($_POST['enviar'])){
    $id = $_POST['id'];
    $id = $_POST['nome'];
        $sql = "DELETE FROM  cidade WHERE id = :id";
        $sql = "DELETE FROM  cidade WHERE nome = :nome";

            $sth = $pdo->prepare($sql);

        $sth->bindParam(':id', $id, PDO::PARAM_INT); 
        $sth->bindParam(':nome', $nome, PDO::PARAM_INT);   
    if($sth->execute()){
            print "<script>alert('Registro excluído com sucesso.');location='index.php';</script>";
    }else{
    print "Erro ao exclur o registro.<br><br>";
        }
    }


?>