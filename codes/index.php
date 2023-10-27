<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HealthCareHub</title>
</head>
<body>  
    <style>
        .boxs a{
            opacity: 0.7;
        }
        .boxs a:hover{
            opacity: 1;
        }
        #img1{
            background-image: url("https://s3-alpha-sig.figma.com/img/83ab/021e/550476f36cfc958a714b3d54e6203c0f?Expires=1699228800&Signature=Fnecry5gTQG5v6tdf4zWCQdMcc3doK~gfXwOn~6W6xFwwMizyqFjExZotdyz7lVq-9sDLG95ZVvGE7Fy-xAvmzf4-jczKtAkfkjSDA1k8epfogmvZHj7XKCarchMDL780p0-pLwRZ4Nw2638Gg0c4azfOaEAaAGhLzYwPjrKG3s4iHSZckHCA0Ort-Tw2uy1zcz65zyW2C0ZLDHJwQsBXTUtNotwFnwwcvc1KVYwMwN-Ba1QY4kBTikyD-JMmUCvd0ssU90dQyqDFfMH-sVjbkb0eLAqHwpiHuVS3jOiF~xftDymZZhH1ZO3xRK~QHVJyB6YMee0NPP4g7joN7nfGQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4");
            background-position-x: 40%;
            background-size: cover;
        }
        #img2{
            background-image: url("https://s3-alpha-sig.figma.com/img/094e/8695/35390f8769a2601189aa29b7eaa1cd33?Expires=1699228800&Signature=NZBn4tnqL2sUYRLWpkju0KP7chVOSS3B5H8ozvwXosVsAIYJorxfcel0aUkh~bXTGLpj3vVqbh9i43IYXzirG9l1NVOdmkFdXM5yGh2E4wgq~U~HLGicIxouvNUPdX5UZja1GkyjAgGJQpSnDbRoqVMy70icpxlu9e8BD8xT6MqeFFFVf5wPVnhe8t5GsCgpAtbr6O6MRinQccbALHHGU4kCpTkzCrUrNcGeLvBQMYn0unXopfWkcKRsRLLTqU~NX63RwyQDEg-elLs3hnfHLcY1myQdfObfi95ZIEA60sAp8lq3WuuX8~4HTp8lx9dlsMD4U8nWf9p7ZRDtdA2cRw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4");
            background-position-x: 63%;
            background-size: cover;
        }
        #img3{
            background-image: url("https://s3-alpha-sig.figma.com/img/a0fd/a82f/1ecb10cbabc8a1317c449ff07bac3384?Expires=1699228800&Signature=Eu1pxjbos4lWQEf-NGXo~LzRmOyH6Dk9vPri4ARK4~VtHYVWK0m7ccx~9bsRWqfF3iDvlVaYGbu8RofkjA0j9RZrpb9zVeo7JF-re332V9DhZssSO8U3zNW1tXEi4zL0KjLGK~NiYSxF-59pJ0J4x4fO4vYNA4glIhC6FJhgdH1P0xE9m9W89sxtrwWhNoiVqwaoUfoOmqkk5jhft~twHrx-cTuZ4o8FTE32TT9UoXz6BcDObUV96Dwyq05zKOGKwfMQDYpdGqtb1bGxTbKHWFDVWeSTeY1MsEE1g0skZnGhR877SQKORvsjZyCciDLZROnt-qPD-71-6PSGJm0mXQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4");
            background-position-x: 54%;
            background-repeat: no-repeat;
            background-size:cover;
        }
        #img4{
            background-image: url("https://s3-alpha-sig.figma.com/img/8cae/f692/d9d3cd3e99b6bf49addc77c689c8d453?Expires=1699228800&Signature=a7sTGcEohG14znlTRTieaXUtQGuvOJnPSmFAYwNqgXLtRAN3OetaeunY~S4WrA16BYggfDP~SZArQpTwO8TBdVOpl1SErlbj2BmCeYrxElp16l~KrQ0iqATmeCojFQ2VG1KSP3eG-fyjsxYBWETXt90Ii8ACdFk7BZ~ds209dzQS~30zzB14xqsmEp7oYZEMaDxtOqZTJlCmUwc1S73yYUFfstx92vRIECINJedrNerfICTgiyxLnbxIPzgy4g9UrdiGXpAtpckL2BWDRYF-4n8XH2Xgs4SM3epHVvcgAlPXzaMTcKmcYl2FcWe3ZFWBgRee1TLKzZKjumyEcHkDnA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4");
            background-position-x: 40%;
            background-size: cover;
        }
    </style>     
    <div class="navbar">
        <div class="navright">
            <a href=""><img id="logo" src="https://s3-alpha-sig.figma.com/img/e84d/69e9/4c07a4e72b28e2b94eb66123bdfee2aa?Expires=1699228800&Signature=a0fqL2l29ZjTc2QNRz8KhLbTgCIC0z8VAMOE~lffKDJR1Onn5yPFPEaUgofy~4FQTHqPqSHAD0H4wmbH1lih4JikehKXDMwoW~KavLl~hNJ3~7PycTCPaj5npyRzYnXOeayWzlMTl0d~HXhZRTBEw3gYbv3lmiUxJLUdyi1-2f9yrxs-85idbzZmv37T-70OSW4jOOi72SD3GdQRqNojMAKpJj1aagdz2hGzATCDITbwShR1REEZEcafHgzdlTW5fxxXowqvoga3K9yLUy2DWlKPaaX3Q1h8VlB~vq2jdOBJstc3-J14bJEgpdrDbs6LSG8rvbIksnzHsKC3J4TJhA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"></a>
        </div>
        <h1>OPACARALHO</h1>
        <div class="navleft">
            <a href="./user_interaction/user_cadastro.php" id="nb"><h3>LOGIN</h3></a>
            <a href="" id="nb"><h3>SOBRE NÓS</h3></a>
            <a href="" id="nb"><h3>HÁBITOS</h3></a>
            <a href="" id="nb"><h3>DESAFIOS</h3></a>
            <a href="" id="nb"><h3>COMUNIDADE</h3></a>
            <a href="consult.php" id="nb"><h3>PERFIL</h3></a>
        </div>
    </div>
    <div class="boxs">
        <div class="box1">
            <h2>Dicas de Exercícios</h2>
            <a href=""><img id="img1" src=></a>
        </div>
        <div class="box2">
            <h2>Dicas anti estresse</h2>
            <a href=""><img id="img2" src=""></a>
        </div>
        <div class="box3">
            <h2>Desafios</h2>
            <a href=""><img id="img3" src=""></a>
        </div>
        <div class="box4">
            <h2>Dicas de Alimentação</h2>
            <a href=""><img id="img4" src=""></a>
        </div>
    </div>
</body>
</html>