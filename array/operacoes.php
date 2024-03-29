<div class="titulo">Operações</div>

<p>Você pode "somar" arrays:</p>

<pre>
    <code class="code-style">
        //Exemplo
        $dados1 = [
            "nome" => "Jose",
            "idade" => 56
        ];

        $dados2 = [
            "naturalidade" => "Fortaleza"
        ];

        $dados2["endereço"] = "Rua A";

        $dadosCompletos = $dados1 + $dados2;
        var_dump($dadosCompletos);
    </code>
</pre>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 56
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
//print_r($dadosCompletos);
var_dump($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);
echo '<br>';

$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";

unset($dadosCompletos["nome"]);
echo '<br>';
//print_r($dadosCompletos);
var_dump($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
var_dump($decimais);
//print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
//print_r($decimais);
var_dump($decimais);

sort($decimais);
echo '<br>';
//print_r($decimais);
var_dump($decimais);