<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

if(!empty($data)){
      $name = $data["name"];
      $idade = $data["idade"];
      $email = $data["email"];
      $horario = $data["horario"];
      $numero = $data["numero"];

      $query = "INSERT INTO form (name, idade, email, horario, numero) VALUES (:name, :idade, :email, :horario, :numero)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":idade", $idade);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":horario", $horario);
      $stmt->bindParam(":numero", $numero);

      
        

      try {

        $stmt->execute();
        $_SESSION["msg"] = "formulario enviado!";     
           
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }
      
    }
    header("Location:" . $BASE_URL . "../form/form.php");

