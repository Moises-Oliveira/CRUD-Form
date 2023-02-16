<?php
     date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO ('mysql:host=localhost;dbname=logins','root','');
    
    if(isset($_POST['açao'])) {
        $email= $_POST['email'];
        $senha=$_POST['password'];
        $registro= date('Y-a-d H:i:s');
        
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?)");
        
        $sql->execute(array($email,$senha));
    }
    
    
   
    
    
    
    // ((($email=$email) && ($senha=$senha)) == false) {
    //      echo 'Dados incorretos, verica-los por gentileza !';
    //      # code...
    // }

    
?>