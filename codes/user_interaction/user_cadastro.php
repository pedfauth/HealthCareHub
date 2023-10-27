<?php 
    include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro-style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="navbar">
        <div class="navright">
            <a href=""><img id="logo" src="https://s3-alpha-sig.figma.com/img/e84d/69e9/4c07a4e72b28e2b94eb66123bdfee2aa?Expires=1699228800&Signature=a0fqL2l29ZjTc2QNRz8KhLbTgCIC0z8VAMOE~lffKDJR1Onn5yPFPEaUgofy~4FQTHqPqSHAD0H4wmbH1lih4JikehKXDMwoW~KavLl~hNJ3~7PycTCPaj5npyRzYnXOeayWzlMTl0d~HXhZRTBEw3gYbv3lmiUxJLUdyi1-2f9yrxs-85idbzZmv37T-70OSW4jOOi72SD3GdQRqNojMAKpJj1aagdz2hGzATCDITbwShR1REEZEcafHgzdlTW5fxxXowqvoga3K9yLUy2DWlKPaaX3Q1h8VlB~vq2jdOBJstc3-J14bJEgpdrDbs6LSG8rvbIksnzHsKC3J4TJhA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"></a>
        </div>
        <div class="navleft">
            <a href="./user_interaction/user_cadastro.php" id="nb">LOGIN</a>
            <a href="" id="nb">SOBRE NÓS</a>
            <a href="" id="nb">HÁBITOS</a>
            <a href="" id="nb">DESAFIOS</a>
            <a href="" id="nb">COMUNIDADE</a>
            <a href="consult.php" id="nb">PERFIL</a>
        </div>
    </div>
    <h1>ÁREA DE CADASTRO</h1>
    <form action="../link_bd/link_cad.php" name="form1" id="form1" method="post">
        <div class="box-tot">
            <div class="box-ajust">
                <div class="box-right">
                    Username:
                </div>
                <div class="box-left">
                    <input type="text" name="txtName" placeholder="Digite seu nome de perfil">
                </div>
            </div>
            <div class="box-ajust">
                <div class="box-right">
                    E-mail:
                </div>
                <div class="box-left">
                    <input type="text" name="txtEmail" placeholder="Digite seu email">
                </div>
            </div>
            <div class="box-ajust">
                <div class="box-right">
                    Senha:
                </div>
                <div class="box-left">
                    <input type="text" name="txtPass" placeholder="Digite uma senha">
                </div>
            </div>
            <div class="box-ajust">
                <div class="box-right">
                    Confirme a senha:
                </div>
                <div class="box-left">
                    <input type="text" name="txtPassC" placeholder="Confirme a senha">
                </div>
            </div><br>
            <button type="submit" value="salvar" id="save">Salvar</button><br>
            <div class="box-ajust">
                <h3>Responda o questionário a seguir para concluir o cadastro:</h3>
                <button id="quest">Questionário</button>
            </div>
        </div>
    </form>
    <script src="../main.js"></script>
    
</body>
</html>