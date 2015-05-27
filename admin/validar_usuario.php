<?php
	include("../static/site_config.php");
	include("../static/clase_mysql.php");

	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);

	$usuario = $_POST["admin"];   
    $password = $_POST["password"];
    $miconexion->consulta("SELECT * FROM administradores WHERE nombre_administrador = '$usuario'"); 
    if($lista=$miconexion->consulta_lista()){     
    if($lista["password"] == $password){
 
  	session_start();  
  
  $_SESSION['usuario'] = $usuario;  
  
  header("Location: administrador.php");  
 }
 else
 {
  ?>
   <script languaje="javascript">
    alert("Contraseña Incorrecta");
    location.href = "login.php";
   </script>
  <?php
            
 }
}
else
{
?>
 <script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "login.php";
 </script>
<?php  
        
}

?>