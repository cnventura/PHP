<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor e Matriz</title>
</head>
<body>
    <h1>Vetor e Matriz</h1>
    <?php
    //Criando um vetor unilateral
    $agenda = array(
        "Nerildo", 
        "+55(11)9999-8888",
        "21/05/1980",
        44,
        true
    );
    ?>
    <h3><?=$agenda[0]?></h3>
    <h3><?=$agenda[4]?></h3>
<hr>
<?php
//Criando um vetor unilateral com parâmetro

$agenda2= array(
    "nome" => "Nerildo",
    "dataNascimento" => "21/05/1980",
    "idade" => 44,
    "telefone" => "+55(11)9999-8888",
    "ativo" => true
);
?>
<h2> Saída do vetor com parâmetro</h2>
<h3><?=$agenda2["telefone"]?>
<p>imprimir todo o vetor com parâmetro</p>
<?php
foreach($agenda2 as $chave => $valor){
    echo "{$chave}: {$valor}<br>";
}
?>
<hr>
<h2> Tipos de saídas de vetores </h2>
<?php
//Imprime todos os dados do vetor
//Tipo de informação e quantidade de caracter usado
var_dump($agenda2);
echo "<hr>";
//imprime todo o vetor de uma só vez
print_r($agenda2);
echo "<hr>";

//criando vetor para manipular
$vetor = ["Fusca", "Brasilia", "Palio", "HB20"];

//organizar em ordem crescente
sort($vetor);
print_r($vetor);
echo "<hr>";

//organizar em ordem decrescente
rsort($vetor);
print_r($vetor);
echo "<hr>";

//Organizar em ordem crescente com prarâmetro
asort($agenda2);
print_r($agenda2);
echo "<hr>";

//Organizar em ordem decrescente com parâmetro
arsort ($agenda2);
print_r($agenda2);
echo "<hr>";

// organizar em ordem crescente com parâmetro pelo valor da chave
ksort($agenda2);
print_r($agenda2);
echo "<hr>";

//organizar em ordem decrescente com parâmetro pelo valor da chave
krsort ($agenda2);
print_r($agenda2);
echo "<hr>";

//remover itens repetidos dentro do vetor
$vetor1 = [3,4,6,8,3,9,7,3,4];

$vetor1 = array_unique($vetor1);
print_r($vetor1);
echo "<hr>";

$vetor = ["Fusca", "Brasilia", "Palio", "HB20"];
//remover o item 1
array_shift($vetor);
print_r($vetor);
echo "<hr>";

//remove o ultimo item
array_pop($vetor);
print_r($vetor);
echo "<hr>";



?>
<h2>Matriz</h2>
<?php
//Criando uma matriz bi-dimencional
$matriz = array(
    ["Maça", 12,"R$ 10,00"],
    ["Pera", 10, "R$ 12,00"],
    ["Banana", 12, "R$ 18,00"]

);
?>
<p><?= $matriz[2][2]?></p>

<h3> Matriz Tri-Dimensional</h3>
<?php
//Consruindo
$agendaTri = [
    'nerildo' => [
        'telefone' => ["11-9999-8888", "11-99999-8888"],
        'email' =>["teste@teste.com","teste2@teste.com"],
        'data-nascimento' => ["21/05/1980"]
    ],
    'joao' =>[
        'telefone' =>["11-9999-8888", "11-99999-8888"],
        'email' =>["teste3@teste.com", "teste4@teste.com"],
        'data-nascimento' => ["31/05/1987"]
    ]
    ];
?>
<p><?=$agendaTri['nerildo']['email'][1]?></p>

<h2>Matriz Multi-dimencional </h2>
<?php
//Criando
$matrizMult = [
    'nerildo' => [
        'telefone' => [
            'whatsapp' => [
                "11-99999-8888", "11-99998-7777"
            ],
            'fixo' =>[
                "11-7777-6666","11-3333-9999"              
            ],
            'comercial' => ["11-9999-4444"]
        ],
        'email' =>[
            'pessoal' =>["teste@teste.com"],
            'comercial' =>["teste2@teste.com.br"]
        ],
        'data-nascimento' => "21/05/1980"
        ]
    ];

?>
<p><?=$matrizMult['nerildo']['telefone']['whatsapp'][0]?></p>
</body>
</html>