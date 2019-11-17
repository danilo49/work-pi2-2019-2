<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="images/favicon.ico"/>
  <title>Cadastro Produto</title>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
 
</head>

<body>
  <?php
    session_start();
    if(!isset($_SESSION['cpf']) || !isset($_SESSION['senha']))
      header('location: login.php');
    $conexao = mysqli_connect ("localhost", "root", "", "trabfinal", 3306);

    if($conexao){

      $nome = $_POST["nome"];
      $preco = $_POST["preco"];
      $qtd = $_POST["qtd"];
      $descricao = $_POST["descricao"];
      $categoria_fk = $_POST["categoria"];
      
      $img= $_FILES['img']['name'];  
      $temp_name  = $_FILES['img']['tmp_name'];  
      if(isset($img)){
        if(!empty($img)){      
          $location = 'images/';      
          if(move_uploaded_file($temp_name, $location.$img))
            echo 'ok';
          }
        } 

    $sql = "INSERT INTO produto (nome, preco, qtd, descricao, img, categoria_fk) VALUES
     ('".$nome."','".$preco."','".$qtd."','".$descricao."','".$img."','".$categoria_fk."')";  
    /*if(isset($_FILES['imagem'])){

      $extensao = strtolower(substr($_FILES['imagem']['name'],-4));
      $img = md5(time()) - $extensao;
      $diretorio = "images/";

      move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$img);
      
    }*/
    if (mysqli_query($conexao, $sql)) {
      header('location: cadProd.php');
      $_SESSION['cadsucesso'] = 10;
      echo "Nova tupla inserida com sucesso!";
    } else if(mysqli_errno($conexao) == 1062){
      header('location: cadProd.php');
      $_SESSION['cadsucesso'] = 20;
      die();
    }else 
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
  } else 
      echo "Ops, deu erro!";
  ?>



</body>
</html>