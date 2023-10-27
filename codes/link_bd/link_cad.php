<?php 
    include("../connection.php");
    $usuario = [
        "NomeUsuario" => $_POST["txtName"],
        "Email" => $_POST["txtEmail"],
        "Senha" => md5($_POST["txtPassC"])
    ];
    
    $NomeUsuario = $usuario["NomeUsuario"];
    $Email = $usuario["Email"];
    $Senha = $usuario["Senha"];

    
    $sql = "INSERT INTO Cliente(NomeUsuario,Email,Senha) VALUES ('$NomeUsuario', '$Email', '$Senha')";
    $result = $conn->query($sql);
    
    if($result === TRUE){
        header("Location: ../user_interaction/sucesso.html");
    }else{
        echo "ALGO DEU ERRADO";
    }
?>