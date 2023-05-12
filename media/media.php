<?php
$nota1=0;
$nota2=0;
$nota3=0;
$nota4=0;
$media="";
$medianota=0;
$botao="";
$resultado="";

if(isset($_POST["enviar"])){
    $botao=$_POST["enviar"];

    if (isset($_POST["nota1"])){
        $nota1=$_POST["nota1"];
    }
    if (isset($_POST["nota2"])){
        $nota2=$_POST["nota2"];
    }
    if (isset($_POST["nota3"])){
        $nota3=$_POST["nota3"];
    
    if (isset($_POST["nota4"])){
        $nota4=$_POST["nota4"];
    }            
    if (isset($_POST["media"])){
        $media=$_POST["media"];
    }
    
    function aritmetica($nota1, $nota2, $nota3, $nota4){
        $medianota = 0;
        $medianota=($nota1+$nota2+$nota3+$nota4)/4;
        return $medianota;
    }
    function ponderada($nota1, $nota2, $nota3, $nota4){
        $medianota = 0;
        $medianota=($nota1*2+$nota2*2+$nota3*3+$nota4*3)/10;
        return  $medianota;
    }
    function harmonica($nota1, $nota2, $nota3, $nota4){
        $medianota = 0;
        $medianota=4/((1/$nota1)+(1/$nota2)+(1/$nota3)+(1/$nota4));
        return $medianota;
    }
     
    if($media=="Aritmética"){
    
        $resultado=aritmetica($nota1,$nota2,$nota3,$nota4);
    
    }else if($media=="Ponderada"){
    
        $resultado=ponderada($nota1, $nota2, $nota3, $nota4);
    
    }else if($media=="Harmônica"){

        $resultado=harmonica($nota1, $nota2, $nota3, $nota4);
    
    }
}

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cálculo da Média do IFRN</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>

    </style>
</head>
<body>
<form action="media.php" method="post">

<label for="media">Aritmética</label>
<input type="radio" name="media" value="Aritmética"></br>

<label for="media">Ponderada</label>
<input type="radio" name="media" value="Ponderada"></br>

<label for="media">Harmônica</label>
<input type="radio" name="media" value="Harmônica"></br>

<label for="nota1">Nota 1</label>
<input type="text" name="nota1"></br>

<label for="nota1">Nota 2</label>
<input type="text" name="nota2"></br>

<label for="nota1">Nota 3</label>
<input type="text" name="nota3"></br>

<label for="nota1">Nota 4</label>
<input type="text" name="nota4"></br>

<input type="submit" name="enviar"><br>

<?php echo $resultado ?>

</form>

</body>
</html>