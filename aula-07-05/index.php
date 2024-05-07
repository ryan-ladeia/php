<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <P>
        ooo
    </P>
    <h2>
        array: definição explicita
    </h2>
    <pre>
       <?php
       $aluno = array("Luna", " Juliana ", " Eduardo ", " Fabio ", " Queren ", " Luis ", " Gabriel ", " Nanda ");
       for ($a=0; $a<7; $a++) {
       echo "$a = $aluno[$a]<br>"; }
       ?>
    </pre>
    <h2>
        array: definição explicita
    </h2>
    <pre>
        <?php 
      $var = array(1, 2, 3, 4);
      for ($a=0; $a< (count ($var)); $a++) {
        echo  "$var[$a] ";
        }
      ?>
    </pre>
    <h2>
        array: definição explicita
    </h2>
    <pre>
        <?php
        $var =["Hubert" => 20, "Ariel" => 5, "Luis" => 6, "Ryan" => 10];
        foreach($var as $chave => $valor){
            if($valor>=10){
            echo "O Aluno: $chave <br>";
            echo "Obteve a nota: $valor <br>";
            }
        }
        ?>
    </pre>
   
</body>
</html>