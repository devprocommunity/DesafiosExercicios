<?php

/**
 * 
 * Autor do código: Marcos Silva
 * GitHub: https://github.com/marcosviniciusid
 * Fundador DevPro Community
 * 
 */

// Resolução 1.

$num1 = 10; // Salvando na variavel 
$num2 = 15; // Salvando na variavel 
$soma = $num1 + $num2; // Somando valores

echo "Valor 1 = ".$num1."<br>"; // O ponto concatena string(texto) com variável.
echo "Valor 2 = ".$num2;
echo "<br>";

if($soma > 20) {
    $somaFinal = $soma + 8;
    echo "Soma: ".$soma."<br>".$soma." + 8 = ".$somaFinal;
} else { // Se não...
    $somaFinal = $soma - 8;
    echo "Se chegamos aqui, é porque a soma deu menor que 20: ".$soma;
    echo "Nesse caso, devo subtrair 5: ".$somaFinal;
}
echo "<hr>";

// Resolução 2

$valor = 10;
echo "Valor 1 = ".$valor."<br>";
$valor += 10;
echo "Valor somado = ".$valor;
echo "<br>";

if($valor > 20) {
    $valor += 8;
    echo "Soma Final = ".$valor;
} else { // Se não...
    $valor -= 5;
    echo "Soma Final: ".$valor;
}
echo "<hr>";

// Resolução 3. Exibindo resultado direto.

$valor = 10;
$valor += 10;

if($valor > 20) { // Se a soma for maior que 20
    $valor += 8;
    echo "Soma Final = ".$valor;
} else { // Se não...
    $valor -= 5;
    echo "Soma Final: ".$valor;
}
// Aqui não é necessario fechar o php, pois só tem código php.