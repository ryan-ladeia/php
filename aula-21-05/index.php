<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aula-21-05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Tabela:</h2>

    <table>
      <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Idade</th>
        <th>Cidade</th>
      </tr>
      <tr>
        <td>Peter</td>
        <td>Rua 23 de maio</td>
        <td>Guanambi</td>
        <td>17</td>
      </tr>
      <tr>
        <td>Luis</td>
        <td>Rua Azul</td>
        <td>Tauape</td>
        <td>18</td>
      </tr>
      <tr>
        <td>Felipe</td>
        <td>Rua Major</td>
        <td>Licinio</td>
        <td>18</td>
      </tr>
    </table>
     
    <h2>Tabela:</h2>
    <table>
        <?php
        $var= [

            'Alunos' => [
        [
            'Nome'   => 'Gael',
            'Endereço' => 'Rua 12',
            'Idade'  => 20,
            'Cidade' => 'Tauape'
        ], 
        [
            
            'Nome'   => 'João',
            'Endereço' => 'Rua Verde',
            'Idade'  => 32,
            'Cidade' => 'Cacule'
        ], 
        [ 
            
            'Nome'   => 'Mareia',
            'Endereço' => 'Rua Vinte',
            'Idade'  => 31,
            'Cidade' => 'Pindai'
        ],
            ]
        ]
        ?>
        </table>
        <table>
  <tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Idade</th>
    <th>Cidade</th>
  </tr>

  <tr>
    <td> <?php print_r($var['Alunos'][0]['Nome']) ?> </td>
    <td> <?php print_r($var['Alunos'][0]['Endereço']) ?> </td>
    <td> <?php print_r($var['Alunos'][0]['Idade']) ?></td>
    <td> <?php print_r($var['Alunos'][0]['Cidade']) ?></td>
  </tr>

  <tr>
    <td> <?php print_r($var['Alunos'][1]['Nome']) ?> </td>
    <td> <?php print_r($var['Alunos'][1]['Endereço']) ?> </td>
    <td> <?php print_r($var['Alunos'][1]['Idade']) ?></td>
    <td> <?php print_r($var['Alunos'][1]['Cidade']) ?></td>
  </tr>

  <tr>
    <td> <?php print_r($var['Alunos'][2]['Nome']) ?> </td>
    <td> <?php print_r($var['Alunos'][2]['Endereço']) ?> </td>
    <td> <?php print_r($var['Alunos'][2]['Idade']) ?></td>
    <td> <?php print_r($var['Alunos'][2]['Cidade']) ?></td>
  </tr>


</table>

<h2>Tabela:</h2>

<?php
$alunos = [
    'aluno' => [
        [
            'nome' => "Fabio",
            'endereco' => "Rua abc",
            'idade' => 20 ,
            'cidade' => "Guanambi" ,
        ],

        [
            'nome' => "Pedro",
            'endereco' => "Rua 123",
            'idade' => 17 ,
            'cidade' => "Candiba" ,
        ],

        [
            'nome' => "Luna",
            'endereco' => "Rua aaa",
            'idade' => 16 ,
            'cidade' => "Cacule" ,
        ]


        ]
    ]

    ?>
</table>
<table>
    <br>
    <br>
  <tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Idade</th>
    <th>Cidade</th>
  </tr>

  <?php
   for ($i=0; $i<count ($alunos ['aluno']); $i++) { ?>

    <tr>
    <td> <?php print_r($alunos['aluno'][$i]['nome']) ?> </td>
    <td> <?php print_r($alunos['aluno'][$i]['endereco']) ?> </td>
    <td> <?php print_r($alunos['aluno'][$i]['idade']) ?></td>
    <td> <?php print_r($alunos['aluno'][$i]['cidade']) ?></td>
  </tr>
  </table>
<?php } ?>
<?php
$listaordenada = array(
     'Juliana', 'Faelma', 'Fabia'
);
?>

<pre>
    <?php
    print_r($listaordenada);
    ?>
    </pre>
    <?php
    echo '<h2> 1.1 - adicionar dados ao array 
    </h2>';
    $listaordenada[] = 'Pedro';
    $listaordenada[] = 'Tiago';
    echo '<pre>';

    print_r($listaordenada);
    echo '<pre>';

    echo '<h2> 2 - array associativa </h2>';
    $var = [
        'Nome' => 'Gabriel',
        'Endereço' => 'Rua Nove de Julho',
        'Idade' => 21
    ];
    ?>
    <pre>
    <?php echo print_r($var) ?>;
    </pre>

    echo '<h2> 2.1 - adicionar dados ao array associativo </h2>';
    $var['cidade'] = 'Conquista';
    $var['estado'] = 'Parana';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>

<?php
echo  '<h2> 2.2 - substitui os dados ao array associativa </h2>';

$var['cidade'] = 'Jacaraci';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>

</body>
</html>