<div class="titulo">Arrays Constantes</div>

<p>Os elementos do Array também são constantes. Não pode adicionar elementos. Sempre que se tenta mudar, erros aparecem.</p>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS = 'teste';
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];
echo '<br>';
echo FRUTAS[1];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];