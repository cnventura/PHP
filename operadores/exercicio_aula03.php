<?php

// Exercício 1 - Índice de Massa Corporal (IMC):
//     Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). 
//     Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está 
//     abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.

$altura = 1.80;
$peso = 80;

$IMC = $peso / ($altura * $altura);
echo "Seu IMC é: ". $IMC;


 
//     Exercício 2 - Verificação de Pagamento:
//     Pergunte ao usuário se ele tem saldo na conta (booleano). 
//     Se tiver, pergunte se ele deseja fazer uma compra. 
//     Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). 
//     Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída 
//  com sucesso ou se o saldo é insuficiente.



//Operadores com Booleanos

$tem_saldo = true;
$deseja_compra = true;


// operadores de Comparação
$valor_compra = 2.000;
$valor_saldo = 3.000;

echo "Igual a: ";
if ($valor_compra <= $valor_saldo){
    echo "saldo suficiente, compra realizada! <hr>";
}else{
    echo "saldo insuficiente <hr>";
}

$resultado = $valor_compra <= $valor_saldo;
echo "A transação foi concluída com sucesso,: $resultado <hr>";

 
//     Exercício 3 - Conversor de Temperatura:
//     Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para 
//     Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.

$temperatura = 38.0; //ver da prof

$resultado = $temperatura * 9/5 + 32;
echo "O resultado em Fahrenheit é ". $resultado;




 
//     Exercício 4 - Verificação de Acesso:
//     Pergunte ao usuário se ele é maior de idade (booleano). 
//     Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). 
//     Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.

$maior_idade = true;
$autorizacao_pais = true;

$tem_acesso = $maior_idade && $autorizacao_pais;
echo "Tem acesso ao conteúdo restrito:". ($tem_acesso ? "SIM" : "NÃO"). "<hr>"; 




 
//     Desafio: Verificação de Números Primos:
//     Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. 
//     Use um booleano para indicar se o número é primo ou não.
 
//     PS.: Ao invés de solicitar ao usuário de fato, pode declarar uma variável com o valor diretamente no código.
//     EX: $altura = 1.75;

$numero = 8;



if ($divisao = $numero/1 && $numero/$numero){
    echo "É primo <hr>";
}else{
    echo "Não é primo <hr>";
}




?>