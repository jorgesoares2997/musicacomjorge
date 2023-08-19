<?php

include_once("config/url.php");
include_once("config/process.php");

if(isset($_SESSION['msg'])) {
  $printMsg = $_SESSION['msg'];
  $_SESSION['msg'] = '';
}

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
     
        <form action="<?= $BASE_URL ?>../config/process.php" method="POST" enctype="multipart/form-data">
       
    
          <h1 style="padding-top: 54px;">Formulario de inscrição EMEMB</h1>
         
          <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
          <div class="form-group">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
              <label for="email" class="form-label">Email: <span style="color:#222">Não obrigatório</span></label>
              <input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
      
            <div class="form-group">
              <label for="idade" class="form-label">Idade:</label>
              <input type="number" class="form-control" id="idade" name="idade">
            </div>
            <div class="form-group">
              <label for="numero" class="form-label">Numero para contato:</label>
              <input type="number" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="form-group">
              <label for="horario" class="form-label">Escolha uma opção de horário e instrumento</label>
            <select name="horario" id="horario" class="form-control" required>
              <option value="0">...</option>
              <option value="1">Violão - Terça das 19:00 as 20:00</option>
              <option value="2">Violão - Terça das 20:00 as 21:00</option>
              <option value="3">Cavaquinho - Sábado das 09:00 as 10:00</option>
              <option value="4">Violão - Sábado das 10:00 as 11:00</option>
              <option value="5">Violão - Sábado das 11:00 as 12:00</option>
            </select>
          </div>
      
            <input type="submit" name="enviar" class="btn btn-primary" id="btn" value="Enviar">
          </form>
          <!-- <div class="form-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
          </div> -->
      
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