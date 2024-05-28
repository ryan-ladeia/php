<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-28-05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Função </h1>
    <h2> Soma Simples </h2>
<?php
 function soma () {
    echo 5 + 7;
}
soma();
?> 
<h2> Soma Parametro </h2>
<?php
 function somaparametro($p1, $p2){
  $s1 = $p1 + $p2;
  echo $s1;
 }
 somaparametro(20,10)
?> 
<h2> SomaR </h2>
<?php
function somar($p1, $p2){
    $s1 = $p1 + $p2;
    return $s1;
}
echo somar (12,12);
echo somar (10,10);
?>
<h2> Multiplicação 3 </h2>
<?php
function multiplica3($x1, $x2, $x3){
    $s1 = $x1 * $x2 * $x3;
    return $x1;
}
echo multiplica3(3,2,1);
?>
<h2> Divisão 4 </h2>
<?php
function dividi4($d1, $d2, $d3, $d4){
    $s1 = $d1 / $d2 / $d3 / $d4 ;
    return $s1;
}
echo dividi4(200,2,2,1);
?>
<h2> Operações com 4 </h2>
<?php
function somadivmulsub($x1, $x2, $x3, $x4, $x5){
    $x = $x1 + $x2 / ($x3* $x4) - $x5;
    return $x;
}
echo somadivmulsub(200,2,2,2,2);
?>

<h2> Elevação a ² </h2>
<?php
function eleva2($n){
    $r1 = $n * $n;
    return $r1;
}
echo eleva2(soma (2,5));
?>
<h2> Repetição com Array // Preenche array </h2>
<?php
function preechearray($qnt, $inicio){
    $r1 = $n * $n;
    return $r1;
}
echo preenchearray(soma (2,5));
?>





</body>
</html>