<?php 

$nota1="";
$nota2="";
$nota3="";
$nota4="";
$media="";
$medianota="";
if (isset($_POST["calcular"])) {
    $calcular= $_POST["calcular"];
    if (isset($_POST["nota1"])) {
        # code...
        $nota1=$_POST["nota1"];
    }
    if (isset($_POST["nota2"])) {
        # code...
        $nota2=$_POST["nota2"];
    }
    if (isset($_POST["nota3"])) {
        # code...
        $nota3=$_POST["nota3"];
    }
    if (isset($_POST["nota4"])) {
        # code...
        $nota4=$_POST["nota4"];
    }
    if (isset($_POST["media"])){
        # code...
        $media=$_POST["media"];
    }

    function calcmedia($nota1, $nota2, $nota3, $nota4,$media)
    {
       
        if( $media=="Aritmética"){
            $medianota=($nota1+$nota2+$nota3+$nota4)/4;
            return $medianota;
        }else if( $media=="Ponderada"){
            $medianota=($nota1*2+$nota2*2+$nota3*3+$nota4*3)/10;
            return $medianota;
        }else{
            $medianota=(4/(1/$nota1)+(1/$nota2)+(1/$nota3)+(1/$nota4));
            return $medianota;
        }
        

    }












}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <form action="atividade.php" method="post">

        <label for="nota1">Nota 1:</label>  <input type="text" name="nota1"><br>
        <label for="nota2">Nota 2:</label>  <input type="text" name="nota2"><br>
        <label for="nota3">Nota 3:</label>  <input type="text" name="nota3"><br>
        <label for="nota4">Nota 4:</label>  <input type="text" name="nota4"><br>
        <br>
        <label for="media">Aritimética</label>
        <input type="radio" name="media" value="Aritmética"><br>
        <label for="media">Ponderada</label>
        <input type="radio" name="media" value="Ponderada"><br>
        <label for="media">Armónica</label>
        <input type="radio" name="media" value="Harmônica"><br><br>

        <input type="submit" name="calcular">
        <?php 
        

        echo "A média ". $media . " é " . calcmedia($nota1, $nota2, $nota3, $nota4,$media);

            ?>
        
    </form>

</body>
</html>