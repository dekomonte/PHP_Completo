<div class="titulo">Switch</div>

<h2>Exemplo 1</h2>

<?php

$categoria = 'asdasdasd';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = 'LUXO';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";
echo "<br>";

?>

<h2>Exemplo 2</h2>

<pre>
    <code class="code-style">
    //Switch
    $nome = "Andressa";
    echo "Resposta: ";
    switch($nome){
        case "Sandra";
            echo "É Sandra!\n";
            break;
        case "Sena";
            echo "É Sena!\n";
            break;
        case "Andressa";
            echo "É Andressa!\n";
            break;
        default:
            echo "Não é nenhum! :( \n";
            break;
    }
    </code>
</pre>

<?php

//Switch
$nome = "Andressa";
echo "Resposta: ";
switch($nome){
    case "Sandra";
        echo "É Sandra!\n";
        break;
    case "Sena";
        echo "É Sena!\n";
        break;
    case "Andressa";
        echo "É Andressa!\n";
        break;
    default:
        echo "Não é nenhum! :( \n";
        break;
}

?>