<?php
include_once("config/url.php");
include_once("config/process.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css" integrity="sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="style.css">
   <link rel="shortcut icon" href="../img/js.ico" type="image/x-icon">
    <title>Formulario Escola de Musica</title>
</head>
<body> 
<div class="container-fluid">
      <div class="stars"></div>
      <h1 id='confirmacao' style=' width: 40%;
    margin: 0 auto;
    padding-top:36px'>Formulário enviado com sucesso! </h1>
  
      <a href="<?= $BASE_URL ?>formulario.php">
        <p  id='confirmacao'  style=' width: 40%;
        margin: 0 auto;
        padding-top:36px; '  >Fazer outra inscrição</p>
      </a>
    
</div>
</body>
<footer> 
    <div id="foot">
        <a href="mailto:jorgesoares2997@gmail.com"><i class="fa-sharp fa-regular fa-envelope"></i></a>
        <a href="https://wa.link/3u2ywl"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/baixodejorge/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>


</footer>
</html>