<?php
$notas = array(4,8,9,4,2,3,10,4,6,0);
$qtd = count($notas);

echo "<h1>Exemplo 1 - Todos os Valores</h1>";

for ($i=0; $i < $qtd; $i++){
    echo "Nota na posição ".$i." - " .$notas[$i]. "<br/>";
}

echo "<h2>Exemplo 2 - Apenas os Valores Menores do que 5</h2>";


for ($i=0; $i < $qtd; $i++) { 
    if($notas[$i] < 5){
    echo "Notas menores do que 5: ".$notas[$i]. "<br/>";
    }
}
?>  