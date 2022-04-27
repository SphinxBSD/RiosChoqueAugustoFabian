<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Estudiante</title>
</head>
<body>
    <h1>PAGINA ESTUDIANTE</h1>
    <form action="estudiante.php" method="post" >
        <h3>Ver notas</h3>
        <label for="username">CI: </label>
        <input type="text" placeholder="cedula de identidad" id="ci" name="ci">
        <br><br>
        <input class="button" type="submit" value="Enviar">
    </form>
    <h3>Notas:</h3>
    
    <?php
        session_start();
        include "database.inc.php";
        $sql = "SELECT * FROM inscripcion";
        $resultado=mysqli_query($con, $sql);  
    ?>
    <table border= "1px">

        <h4><?php  
            if (!empty($_POST['ci'])) {
                echo "CI: ";
                echo $_POST['ci'];
            }
        ?></h4>
        <tr>
            <td>Sigla</td>
            <td>Nota final</td>
        </tr>
        <?php
        if (!empty($_POST['ci'])){
            
            while ($fila=mysqli_fetch_array($resultado)) {
                $final = $fila['nota1'] + $fila['nota2'] + $fila['nota3'];
                if ($_POST['ci'] == $fila['ciest']) {
                    echo "<tr>";
                    echo "<td>".$fila['sigla']."</td>";
                    echo "<td>".$final."</td>";
                    echo "</tr>";
                    ///header("Location: estudiante.php");
                }
            }
        }
        ?>
    </table>
    
</body>
</html>