<?php
require_once('config.php');
try{
    $stmte = $pdo->query("SELECT * FROM cliente");
    $executa = $stmte->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> </title>
<!-- css em bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- js em bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- css local-->
      <link href="css/estilo_index.css" rel="stylesheet">
<!-- bootstrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <style>
            a{
        text-decoration: none;
        text-align: center;
        }

        .ç{
                text-decoration: none;
                text-align: center;
                }
      </style>

      </head>

<body class="">

<br>
<br>
<br>
          
<h1 align="center">CRUD simples usando PDO</h1>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBIRDw8PDw8RDw8PDw8PDw8REREPDw8PGBQZGRgUGBgcIy4lHB4rHxgYJjgmKy8xNTU1GiQ9QDs0Py44NTEBDAwMEA8QHBISGjQhISM2NDQ0NDQ/MTU0NDQ0MTQ0MTQ0MTExMTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0P//AABEIANIA8AMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQUCAwQGB//EAEEQAAIBAgIGBQgHBgcAAAAAAAABAgMRBAUSITFRYZEGQXGxwRMiIzJSgaHRBzNCYmOSoiRygrLC8BQ0Q4Oj0uH/xAAaAQEAAgMBAAAAAAAAAAAAAAAAAQMCBAUG/8QAOxEAAgECAgYGBggHAAAAAAAAAAECAxEEMQUSITJBsVFhcZGh0SJCgcHh8BMjJDNScpLSFDRDYrLi8f/aAAwDAQACEQMRAD8A+zAAAAgAEkAAAAAAkEAAkgAAAAEggAEkAAAAAAkgkAAgAEggAEggAEggAAAAAAAAAAAAiUktrS7XYAkGmWIgttSC7ZJGqWYUV/rQ90k+4lRk8kYOpBZyXejrBXzzegttVflm+5Gt59h+qo32Qn8jNUqjyi+5lMsZho51Yr2rzLQFNLpFh11zf8JqfSij7MvfZGX8PW/Ayt6Rwi/qx7/IvgceX4+FeGlTbaTs09qZ2FTi4uzzNuE4zipRd0+IABBkAAAAAAAAAAAAAAAAAAAAAAAAAAAUOdYmUpeRjJxjTipVWnbSbdowv1dbfuKfycfZT7W33k1sUp1GoLSnia8nFXUU1BWjdvgmdccqrvqhHtnd/BHUhalFRbt4dvjc85VpvFVJTUdbb22XC3DKz7Xc5korYkuRkpbkkdayar11acexORlHJ5faxK/hpqP9TIdan+Ln5ExwNXhTt+nzOTyjJ0ztjlVP7VapLs0I9yM1ldHr8rL/AHKke5ow/iKXX3f8L1ga/Uvb5XKypa2tFNjWk9x6+OW0Fsot/vSlL+ZmyOFprZRpLjoxv3CGMhB3s33GNTRM6is5JePkeY6L4/yeIUG/NqrRfCXU+er3nvXJb0Vqkls8nHsMJVHvb7Is1sRWVWeso2OjgcLLC0vo3PW23Wy1r+19paeUj7S5mLrR9oosTjdBXk2lx1FXi82qRUXbRU7uK5WvzMaVGVR2iZ4nF0sNHWqX29G09c8THezF4yPE8HPOKz+3b3RNMszqvbPkrdxtLR1XpRzJaeoerCT/AE+bPoDx0d3xNUsyS22Xbc+fSxcntd+1Gp1HvfMtWjXxn4fEplp5+rR75f6+8+iQzWnfzppKz2JvX7jGef4WO2t+mfyPnrk95jcsWjYcZPwKZacxD3YRXbd+9H1HC4mFWCqU3eMr2etbHZ6nsN5R9EV+xRe+VR/G3gXhyqsNScorg2j0WHqOpRhOWckn3oAAwLgAAAAAAAAAY1HaLfWkzIhrVbgAfKMPi3DEYOSfqTS5trxPotKoppWvJ6MW/Ota6PldRuNWhvjOK5SR7nKsfGGk5vU4Ukutt7kjoaQV6qt87WcjRMlGhJt2S8kXuj9yPvdyVF/cXYrlfLNvZg32uxqeaVH9hR7Z/wDhqKhUfDkbksfh169+xN8ky20Ze3ySRGhvlLnYppY+q/tRXYr+JqlXqvbWl7ox8TNYafUVS0lSWUZP2Jc2i9cI9fxkyHoLbo/AoHd+tObNNWlDa4/FozWE6ZfPgVS0m7ejT72lyUj0EsZTW2UUctfNqUV6z5SPKYmaT83Uu1nK5G3DR0Xtcn4HPq6brLZGEe9v9pc4it/iKiScdBNN2etq+wr8yr6dR29WOy2zjb++o5bkG3Rw0aW6c7EYyriNtTPqyssl8t3AANk1QAASCCSASfQui8bYGhx8pLnUky3K/JIWwlBfhp89fiWB5ms71JPrfM9xh46tGEeiK5AAFZcAAAAAAAAAAACUfGc082u17NSS5SLmdZxcGnZpXv2IqOlMdHE4hezVq2/MzuxD1xfadartrUn0nnqXo4XER6Pj5F/CWoyua6exGZYUmVyTFGRDJJOfEvUzejmxewRzMZ7rKettNZnV2swN+ORyJZgAGQsAACQAQAAwRPYOJDyZ9Ry+NqFFbqVNfpR0mFKNoxW6KXJGZ5Zu7bPepWVgACCQAAAAAAAAAAAD5D0wjbGYlfiyfPX4myUrxg98bmfTqFsdX4+TfOCNEJXp0X92Pcjqy36D/LyRwIL6vFx/NzkelpPzV2IzRrw/qR7F3GwteZQsiTJGKMiGZEnLi9h0nJi9jJjmY1N0qKm0wM57TA31kcl5gAkkEAkgAkgAi4IM6EbzjH2pKPNpGJ0ZXHSxFCO+tTXxRjJ2TZnTjrTS6WuZ9QAB5g908wAAQAAAASACASACASAD5f8ASDG2Lm/ajTf6beBW0H6KlwSXKyLj6RY2xEONGL/VJeBSYN3oUu1r9TXgdP1aL618+BxEvTxUemMuXxPUYV+ZH92PcbkacJ9XH3dxuNiWbNSG6iTJGKMjFlgOPGPUdhx4x6iYZldXdZUT2kEz2mBvo5TzJIJAIAIIIJsZGIAJBYZCr4zDL8S/JN+BXlt0XhfHUOHlJf8AHL5ldZ2pyfU+TL8Mr1oL+6PNH0QEg82ezIBIAIBIAIBIAIBIAIBIAPnv0kx9JRlvpSXJv5nmcA/QQ4S/rZ6z6So/5aXCqv5TyOXP0XZU8b+J0b/UUn0Nc2ce32quumL/AMUeqwL9HHsOlHLl/wBVHsfedRtz3maNLcj2IlGRijJGDLAcON2M7jixpMN4wq7rKie1kCW0xN45TzJIAAAIABJABBIL3odG+Mv7NOcu5eJRHo+g8f2irL2aNuco/wDUoxTtRn2G5gFfE0+09wCQefPWkAkAEAkAEAAAAAAAAA8Z9I0fQ0JbpVVz0X4HiMsfo5r8RdyPffSDG+EhLdVtzi/kfPssfmVFxT/vkbyf2ZPofvOXa2Ol1x93wPWZa/RR/i72dZxZV9Uu2XedpvVN9nMofdx7EZIkglGBcDgxr1HeV+OZlT3iutulTN6zEl7TE3TlEgi5FwSTcXIbMXMi5KRlcXNE6yW1nFXzSEdWlpPdHzmVyqRirt2LqdGc3aKuWbket6B07/4mr1XpwT4pNtfGJ8/wOIdWpFVIzhSb86UUnO3v2fE+t5LSp0qMIUVow9bbpOTetyb62znYrFRlBwjxOxgcBOnUVSey3lYtgYqRlc5p2gAAAAACQAAAAADFsNmEmAed6dxvgW91WD+El4nzbLX9auEH8WfTOmMb4Ct9103+uK8T5ll3r1Vvivg38zdj/Ky6n5HMnsx8euP7j1mUP0S95YFbkz9GuD8EWRv1N9nLofdx7AiTEm9jAvEnZFTj6vUbsbmEY3jF3ZS1K13dsupwttZq16l/RiS2Q5HPOul1nFWzSC1J6T3R85lkqkYq7djXp0Jzdoq5ZuRqnXS2sqXiq1T1IaK3y1vkbaeU1KmupKUuGxcjUnjYLd2nQpaLm9s3Y2V8zhHUnpPdHWzmeKrVNUIaK3y+Rc4TJIxtaBb4fLEuo1pYmrPqN+ngaEM1rdp5SnlNSeupOT4LUi2weRRja0fgeno4BLqO6lhOBQ1xk7m2titFWRSYbKkraj1OVU3Gmo+y2l2bfEilheB2UqdlYrm01Ysimb4SN0ZGmKNsSssNyZJhEyAJAAAAAAAABgzXI2tGEkAVPSCGlhMRH7ml+VqXgfLKFN06rUk1pJ6O59fcfYq9NSjKMtcZRcZLemrM+WZzh6lOo4uTcqfmRfC1k1waN7DR+kpTpcc/nwOVjp/QV6VdrZl4+9XsWOTVUouLaWpSV3btO2pj6cdsrvdHWeXddRWt7EcdbNILVF6T3R1nQm4L0pOxy6P0rWrCNz1NXOUvUhfjJ2K3FZrOXrTUVujqKB4itP1IaC3vWzbTympU11Jylw6uRrSxVOO4rm7HA1p/eSsjZWzSCdk9J7o6zmeJrVPUhorfLW+RcYXJoxtaJbUMt4FEsRVnxsbVPBUKeav2nlqeU1KmupKUuGxci0wuSxVrRPSUcAl1HdTwnApttuzaTSVoqxR4fLUuosKOAS6i2hheB0ww3ANpE6rZXUsHwOqnhuB3xoG2MCt1DNQOWGHN8KSRvUTJQMG2zNI1xgbIxM1EyUSCSIxM4olRMkgAkZAAAAAAAAAAAAxkjIAHNUg2eA6TYGpWempaKV9FRVmo8d59HsU9TC3T1bUZwdrviYTjrbOB8nWQzk/PnKS4vUWGGyOMfsnsVl6Tat1s6IYJbizV4srvbYlY81Qyu3Ud9LLkuovI4Xgbo4XgTsRFmypp4NbjqhheBZww3A2rDmLmZKBXww3A6IYc7I0zJRK3IsUbHNGibFA3qIUDEyNSgZqJsUTJRANaiZKJmomVgDBRMkiSQCLEgAAAAAAAAAAAAAAAAEGDgrGwAHBPD65dq7iY0DsaJRnrGOqc8aBsVJG0GNybGvQGibAQSa9EnRMyACNEWMiABYEgAgEgAgEgAgkAAEEgAgEgAAAAAAAAAAAAAEAAEgAAgAAEkAAEkAAEgAAgAAEgAAAAAAAAAAA//9k=" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>


<h2 align="center" >  <a href="add_cliente.php" class="a"> Novo Cliente  </a> </h2>
</div>
<br>

    <table class="table" >
    <tr>

		<td><b>ID</td>
		<td><b>Nome</td>
        <td><b>CPF</td>
        <td><b>RG</td>
        <td><b>Data de Nascimento</td>
        <td><b>Usuário</td>
        <td><b>Logradouro</td>
        <td><b>Número</td>
        <td><b>Complemento</td>
        <td><b>Bairro</td>

        

		<td colspan="2" align="center"><b>Ação</td>
	</tr>

</body>

<?php        
    if($executa){
        while($reg = $stmte->fetch(PDO::FETCH_OBJ)){ // Para recuperar um ARRAY utilize PDO::FETCH_ASSOC 
?>
    <tr class="conteudo">

      <td><?=$reg->id?></td>
      <td><?=$reg->nome_completo?></td>
      <td><?=$reg->cpf?></td>
      <td><?=$reg->rg?></td>
      <td><?=$reg->data_nascimento?></td>
      <td><?=$reg->usuario?></td>
      <td><?=$reg->logradouro?></td>
      <td><?=$reg->numero?></td>
      <td><?=$reg->complemento?></td>
        <td><?=$reg->bairro?></td>
  <td> <a class="ç" href="editar_cliente.php?id=<?=$reg->id?>"> Editar  </a> </td>
  <td> <a class="ç" href="apagar_cliente.php?id=<?=$reg->id?>"> Excluir </a> </td>

  </tr>
<?php
       }
       print '</table>';    

    }else{
           echo 'Erro ao inserir os dados.';
    }
}catch(PDOException $e){
      echo $e->getMessage();
}
?>





</body>
</html>