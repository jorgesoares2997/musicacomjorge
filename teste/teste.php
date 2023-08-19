<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "form";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
if($conn){
    echo 'funcionou';
}

  $name = 'jorge';
  $idade = 23;
  // $table = "teste";
  // $name = "Jorge";
  // $sobrename = "Soares";
  // $email = 'jorgesoares2997@gmail.com';
  // $senha = 456123;

  $q = "INSERT INTO form (name, idade) VALUES ($name, $idade)";
  // $q = "INSERT INTO notnull (name, idade) VALUES ('saulo', 13)";
  $conn->query($q);

  $conn->close();