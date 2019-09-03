<?php
 
//leitura do arquivo JSON "empregados_array.json" sendo array com vários nomes
$json_str = file_get_contents('empregados_array.json');
 
//faz o parsing da string, criando o array "empregados"
$jsonObj = json_decode($json_str);
$empregados = $jsonObj->empregados;

//navega pelos elementos do array, imprimindo cada empregado
echo "<h1>mostra o FOREACH</h1>";
foreach ( $empregados as $e )
    {
    echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>"; 
    }
    
//converte o conteúdo do array associativo para uma string JSON
$json_str = json_encode($jsonObj);

//imprime a string JSON

echo "<h1>mostra a STRING JSON antes do file_put_contents()</h1>";
echo "$json_str";

file_put_contents('exemplo.json', $json_str);
?> 