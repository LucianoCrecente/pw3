<?php
//string json contendo os dados de um funcionário
$json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';
 
//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);
 
//imprime o conteúdo do objeto 
echo "nome: $obj->nome<br>"; 
echo "idade: $obj->idade<br>"; 
echo "sexo: $obj->sexo<br>"; 

/*
Observe que a função “json_decode” é aplicada diretamente sobre a string “$json_str”, que contém os dados do funcionário representados em JSON. Esta função faz o parsing no conteúdo da string, convertendo-o automaticamente para um objeto PHP (variável $obj). Realizada a conversão, o $obj pode ser utilizada normalmente dentro do código PHP, conforme exemplificamos através das instruções “$echo”.
*/
?> 