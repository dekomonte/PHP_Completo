<div class="titulo">While|Do-While</div>

<?php
const VALOR_LIMITE = 8;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador < 8 <br>";
    $contador++;
}

$contador = 100;
do {
    echo "do-while $contador < 8 <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}

/*---------------Estruturas de Repetição---------------*/
#WHILE
$cont=1;
while ($cont<=10){
    echo "$cont";
    echo " ";
    $cont++;
}
echo "<br>";
echo "\n";

#DO-WHILE
$cont=1;
do{
    echo "$cont";
    echo " ";
    $cont++;
}while ($cont<=10);
echo "<br>";
echo "\n";
