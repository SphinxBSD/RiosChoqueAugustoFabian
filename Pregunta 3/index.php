<?php
    session_start();
    include "database.inc.php";
    if (!empty($_POST['username']) && !empty($_POST['password'])){
        $sql = "SELECT usuario, pwd FROM acceso";
        $resultado=mysqli_query($con, $sql);
        $message = '';
        while ($fila=mysqli_fetch_array($resultado)){
            if ($_POST['password']==$fila['pwd']) {
                $_SESSION['user_id'] = $fila['usuario'];
                if ($fila['usuario'] == 'Estudiante'){
                    header('Location: estudiante.php');
                }
                if ($fila['usuario'] == 'Director'){
                    header('Location: director.php');
                }    
            }
            else{
                $message = "Sorry Bro";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <?php if (!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif;?>

    <form action="index.php" method="post" >
        <h3>Iniciar Sesion</h3>

        <label for="username">Usuario</label>
        <input type="text" placeholder="nombre de usuario" id="username" name="username">

        <label for="password">Contraseña</label>
        <input type="password" placeholder="contraseña" id="password" name = "password">
        <br><br>
        <input class="button" type="submit" value="Enviar">
    </form>
    
    <h3>pagina para probar</h3>
    <h4><a href="prueba.php">Prueba</a></h4>
</body>
</html>
