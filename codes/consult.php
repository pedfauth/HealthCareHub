<?php
    include("connection.php");

    $sql = "SELECT NomeUsuario, Email, Senha FROM cliente";
    $result = $conn -> query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/consult-style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>SENHA</td>
        </tr>
        <?php if ($result ->num_rows > 0){
            while ($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo "{$row['NomeUsuario']}<br>"; ?></td>
            <td><?php echo "{$row['Email']}<br>"; ?></td>
            <td><?php echo "{$row['Senha']}<br>"; ?></td>
        </tr>
        <?php
            }
        }else{
            echo "Não há registros cadastrados.";
        }?>
    </table>
</body>
</html>