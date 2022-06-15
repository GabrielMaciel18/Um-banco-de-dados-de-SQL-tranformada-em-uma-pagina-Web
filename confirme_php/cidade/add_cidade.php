<div align = "center"> 
    <form method="post" action="add_cidade.php">
        ID <input type="number" name="nome">
        <br>
        Nome<input type="text" name="nome">
        <br>
        
        <input name="enviar" type="submit" value="cadastrar">      
    </form>

</div>

<?php 
    require_once('config.php');
        if(isset($_POST['enviar'])){
            $nome=$_POST['id'];
            $nome=$_POST['nome'];

        try{
            $stmte = $pdo->prepare("INSERT INTO cidade(id) VALUES(?)");
            $stmte -> bindParam(1, $id, PDO::PARAM_STR);

            $stmte = $pdo->prepare("INSERT INTO cidade(nome) VALUES(?)");
            $stmte -> bindParam(2, $nome, PDO::PARAM_STR);
            
            $executa = $stmte->execute();

            if($executa){
                echo 'Dados inseridos com sucesso.';
                header('location: index.php');
            }else{
                echo "Erro ao inserir dados.";
            }

        }catch(PDOException $e){
            echo $e->GetMessage();
        }
        
        }
    

?>