<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Docente</title>
</head>
<body>
    <h1>PAGINA DOCENTE</h1>
    <form action="director.php" method="post" >
        <h3>Promedio de notas por departamento</h3>
    </form>
    <h3>Notas:</h3>
    
    <?php
        session_start();
        include "database.inc.php";
        $sql = "SELECT ciest,nota1,nota2,nota3,depto FROM inscripcion, persona WHERE ci = ciest";
        $resultado=mysqli_query($con, $sql); 
    ?>
    <table border= "1px">

        <tr>
            <td>Depto</td>
            <td>Promedio</td>
        </tr>
        <?php


///header("Location: estudiante.php");

        $suma1 = 0;$suma2 = 0;$suma3 = 0;$suma4 = 0;
        $suma5 = 0;$suma6 = 0;$suma7 = 0;$suma8 = 0;$suma9 = 0;

        $cont1 = 0;$cont2 = 0;$cont3 = 0;$cont4 = 0;
        $cont5 = 0;$cont6 = 0;$cont7 = 0;$cont8 = 0;$cont9 = 0;
        while ($fila=mysqli_fetch_array($resultado)) {
            $final = $fila['nota1'] + $fila['nota2'] + $fila['nota3'];
            if ($fila['depto'] == '01') {
                $suma1 = $suma1 + $final;
                $cont1 = $cont1 + 1;
            }
            if ($fila['depto'] == '02') {
                $suma2 = $suma2 + $final;
                $cont2 = $cont2 + 1;
            }
            if ($fila['depto'] == '03') {
                $suma3 = $suma3 + $final;
                $cont3 = $cont3 + 1;
            }
            if ($fila['depto'] == '04') {
                $suma4 = $suma4 + $final;
                $cont4 = $cont4 + 1;
            }
            if ($fila['depto'] == '05') {
                $suma5 = $suma5 + $final;
                $cont5 = $cont5 + 1;
            }
            if ($fila['depto'] == '06') {
                $suma6 = $suma6 + $final;
                $cont6 = $cont6 + 1;
            }
            if ($fila['depto'] == '07') {
                $suma7 = $suma7 + $final;
                $cont7 = $cont7 + 1;
            }
            if ($fila['depto'] == '08') {
                $suma8 = $suma8 + $final;
                $cont8 = $cont8 + 1;
            }
            if ($fila['depto'] == '09') {
                $suma9 = $suma9 + $final;
                $cont9 = $cont9 + 1;
            }
        }
        if ($cont1 > 0) {
            $resp = $suma1/$cont1;
            echo "<tr>";
            echo "<td>".'01'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont2 > 0) {
            $resp = $suma2/$cont2;
            echo "<tr>";
            echo "<td>".'02'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont3 > 0) {
            $resp = $suma3/$cont3;
            echo "<tr>";
            echo "<td>".'03'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont4 > 0) {
            $resp = $suma4/$cont4;
            echo "<tr>";
            echo "<td>".'04'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont5 > 0) {
            $resp = $suma5/$cont5;
            echo "<tr>";
            echo "<td>".'05'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont6 > 0) {
            $resp = $suma6/$cont6;
            echo "<tr>";
            echo "<td>".'06'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont7 > 0) {
            $resp = $suma7/$cont7;
            echo "<tr>";
            echo "<td>".'07'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont8 > 0) {
            $resp = $suma8/$cont8;
            echo "<tr>";
            echo "<td>".'08'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        if ($cont9 > 0) {
            $resp = $suma9/$cont9;
            echo "<tr>";
            echo "<td>".'09'."</td>";
            echo "<td>".$resp."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>