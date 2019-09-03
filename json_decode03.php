<?php
 
//leitura do arquivo JSON "empregados_array.json" sendo array com vários nomes
$json_str = file_get_contents('empregados_array.json');
 
//faz o parsing da string, criando o array "empregados"
$jsonObj = json_decode($json_str);
$empregados = $jsonObj->empregados;

//navega pelos elementos do array, imprimindo cada empregado
foreach ( $empregados as $e )
    {
    echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>"; 
    }
    
?> 