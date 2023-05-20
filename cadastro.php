<?php
     date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO ('mysql:host=localhost;dbname=logins','root','');
    
    if(isset($_POST['açao'])) {
        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $senha=$_POST['password'];
        $registro= date('Y-a-d H:i:s');
        
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
        
        $sql->execute(array($nome,$email,$senha));
        echo 'Cliente cadastrado com sucesso!!';
    }else{
        echo'Cliente não cadastrado, verificar o preenchimento correto dos dados! ';
    }

    
?>