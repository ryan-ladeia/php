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
        $var =["Hubert" => 3, "Ariel" => 5, "Luis" => 12, "Ryan" => -22];
        foreach($var as $chave => $valor){
            if($valor>=6){
            
            echo "Alunos Aprovados <br>";
            echo "O Aluno: $chave <br>";
            echo "Obteve a nota: $valor <br>";
            } 
            else if($valor <6 && $valor >= 4 ){
            echo "Alunos Recuperação <br>";
            echo "O Aluno: $chave <br>";
            echo "Obteve a nota: $valor <br>";
            } 
            else if ($valor >10 || $valor <0 ){
            echo "O Aluno: $chave <br>";
            echo "Obteve a nota: $valor <br>";
            echo "A nota é invalida <br>";
            }
            
            else {
                echo "Alunos Reprovados <br>";
                echo " O Aluno: $chave <br>";
                echo "Obteve a nota: $valor <br>";
            }
        }
        ?>
    </pre>
   
</body>
</html>