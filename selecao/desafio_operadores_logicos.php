<div class="titulo">Desafio Operadores Lógicos</div>

<?php
$resumo = 'Resumo do Exercício:<br>
Dois trabalhos - TERÇA e QUINTA<br>
<ul>
<li>Se os dois trabalhos forem executados -> TV 50 polegadas e Sorvete;</li>
<li>Se apenas um for executado -> TV 32 polegadas e Sorvete;</li>
<li>Se nenhum for executado -> Fica em casa e Sem Sorvete.</li>
</ul><br>';

echo $resumo;
?>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (TERÇA):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (QUINTA):</label>
        <select name="t2" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<pre>
    <code class="code-style">
    //Código PHP do desafio
    if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if($t1 && $t2) {
        $tv = '50"';
    } elseif($t1 xor $t2) {
        $tv = '32"';
    }

    if($t1 or $t2) {
        $sorvete = true;
    }

    if($tv) {
    $resultado = "Vamos comprar uma TV de $tv polegadas!";
    } else {
        $resultado = "Sem TV dessa vez :(";
    }

    $saudavel = !$sorvete;

    if($saudavel) {
        $resultado .= 'Estamos mais saudáveis.';
    } else {
        $resultado .= ' Sorvete liberado \o/!';
    }

    echo "$resultado";
    </code>
</pre>

<?php

if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if($t1 && $t2) {
        $tv = '50"';
    } elseif($t1 xor $t2) {
        $tv = '32"';
    }

    if($t1 or $t2) {
        $sorvete = true;
    }

    if($tv) {
    $resultado = "Vamos comprar uma TV de $tv polegadas!";
    } else {
        $resultado = "Sem TV dessa vez :(";
    }

    $saudavel = !$sorvete;

    if($saudavel) {
        $resultado .= 'Estamos mais saudáveis.';
    } else {
        $resultado .= ' Sorvete liberado \o/!';
    }

    echo "<p>$resultado</p>";
}
?>