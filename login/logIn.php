<?php 
session_start();

# Conectamos con MySQL con la funcion mysqli(Host, usuario, clave, DataBase)
$mysqli = new mysqli("localhost","root","","IPIPLUS");
# Evaluamos si la conexion ha sido exitosa.
  if ( mysqli_connect_errno() ) {
          # Desplegamos el error en caso de que suceda.
      die( "Error al conectar: ".mysqli_connect_error() );

	}
#Loguear

# Cuando se presione el boton de Log In ejecutaremos
  if ( isset($_POST['logIn_btn']) ) {
	# We store the values into some php variables
		  $usuario = $_POST['usuario'];
		  $clave = $_POST['clave'];
	# We create the SQL statement and execute it
		  $var = 0;
	
		  $sql = "SELECT * FROM usuarios WHERE nombre= '".$usuario."' AND clave='".$clave."'";
	
		  $result3 = $mysqli -> query($sql);
	
		  $sql_admin = "SELECT * FROM usuarios WHERE Email= '".$usuario."'AND tipo_usuario= 'admin' AND clave='".$clave."'";
	
		  $result_admin = $mysqli -> query($sql_admin);
	
		  while( $row = $result3 -> fetch_array(MYSQLI_ASSOC) ) {
	# We evaluate the result given back and if its value equals 1 then we execute this code else we don't.
			$var = 1;
	
			session_start();
	
	
	
			if ( !$row = $result_admin -> fetch_array(MYSQLI_ASSOC) ){
	
			  $_SESSION['usuario'] = $usuario;
			  header('Location: ../index.php');
	
			}else {
			  $_SESSION['usuario'] = $usuario;
			  $_SESSION['esAdmin'] = TRUE;
			  header('Location: ../Admin/index.php');
	
			}
	
			}if($var == 0){
			  header('Location: ../register');
	
			}
	
		}
	
	
	 ?>