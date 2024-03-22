<?php
$nomes = array("Juquinha", "Chico Moedas", "Belizardo", "Mario Lucio", "Kelly Key");
$notas = array(6, 3, 5, 8, 9);
$notas1 = array(0, 2, 4, 6, 10);
$notas2 = array(7, 2, 3, 7, 8);
$qtd = count($nomes);

for ($i=0; $i < $qtd; $i++){
    $media = ($notas[$i] + $notas1[$i] + $notas2[$i]) / 3;
    echo "Nome do Aluno: " .$nomes[$i]. ", " . "1ª Nota: " .$notas[$i]. ", " . "2ª Nota: " .$notas1[$i]. ", " . "3ª Nota: " .$notas2[$i]. ", " . "Média: " .number_format(round($media, 0), 0, ",", "."). "." . "<br/>" . "<br/>";
    
}
?>