<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
if ($email === 'a@a.a' && $password === '310791') {
  // CREAMOS SESION
  $_SESSION['email'] = $email;
  $_SESSION['id'] = random_int(1, 1000);
  header("Location: http://localhost:/clases_php/base/loginpoo/index.php");
} else{
  echo "UNO DE LOS DATOS ES INCORRECTO, PORFAVOR VERIFIQUELOS Y VUELVA A INGRESAR";
  
  /*$msg = "Las credenciales ingresadas no coinciden";
  $aPathOrigin = explode('?', $_SERVER['HTTP_REFERER']);
  $pathOrigin = $aPathOrigin[0];

  header("Location: $pathOrigin?msg=$msg");*/
}


  
class Connect {

  public function init() {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "actividad_1";

      try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully";

       return $conn;
     } catch(PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
     }
  }
}  

?>