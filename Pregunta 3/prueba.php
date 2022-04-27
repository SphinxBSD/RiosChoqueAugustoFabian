<?php
$con = mysqli_connect("localhost","augustorios","123456");
mysqli_select_db($con,"rioschoqueaugustofabian");
$sql="SELECT * FROM Persona";
$resultado = mysqli_query($con, $sql);
if($resultado){
    while ($fila=mysqli_fetch_array($resultado))
    {
        print_r($fila);
    }
}else{
    echo "result is empty";
}
?>
