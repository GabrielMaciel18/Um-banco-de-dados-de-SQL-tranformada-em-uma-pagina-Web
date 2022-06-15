<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div align="center">
    

    <form method="post" action="add_cliente.php">

      Nome completo: <input type="text" name="nome_completo">
      <br>
      CPF: <input type="number" name="cpf">
      <br>
      RG: <input type="number" name="rg">
      <br>
      Data de nascimento: <input type="date" name="data_nascimento">
      <br>
      Usuário: <input type="text" name="usuario">
      <br>
      Logradouro: <input type="text" name="logradouro">
      <br>
      Número: <input type="text" name="numero">
      <br>
      Complemento:<input type="text" name="complemento">
      <br>
      Bairro: <input type="text" name="bairro">
      <br>
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
        $stmte = $pdo->prepare("INSERT INTO cliente(nome_completo, cpf, rg, data_nascimento, usuario, logradouro, numero, complemento, bairro) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmte->bindParam(1, $nome_completo, PDO::PARAM_STR);
        $stmte->bindParam(2, $cpf, PDO::PARAM_STR);
        $stmte->bindParam(3, $rg, PDO::PARAM_STR);
        $stmte->bindParam(4, $data_nascimento, PDO::PARAM_STR);
        $stmte->bindParam(5, $usuario, PDO::PARAM_STR);
        $stmte->bindParam(6, $logradouro, PDO::PARAM_STR);
        $stmte->bindParam(7, $numero, PDO::PARAM_STR);
        $stmte->bindParam(8, $complemento, PDO::PARAM_STR);
        $stmte->bindParam(9, $bairro, PDO::PARAM_STR);
        $executa = $stmte->execute();
            if($executa){
                echo "Dados inseridos com sucesso";
                header('location:index_cliente.php');
            }else{
                echo "Erro ao inserir os dados";
            }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>