<?php
// ==========================================
// PARTE 1: PROGRAMAÇÃO ESTRUTURADA
// ==========================================

// Dados do primero cachorro
$nome_cachorro_1 = "Nelson";
$comida_cachorro_1 = 3;
$sono_cachorro_1 = false;

// Dados segundo cachorro
$nome_cachorro_2 = "Jeremias";
$comida_cachorro_2 = 1;
$sono_cachorro_2 = True;    

// Funçao para manipular comida
function comer($quantidade_comida) {
    return $quantidade_comida - 1;
}

// Função para minipular sono
function dormir() {
    return true;
}
$sono_cachorro_2 = dormir();
$comida_cachorro_1 = comer($comida_cachorro_1);

// Exibir em html

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultado cachorros</title>
</head>
<body>
    <h1>Resultado dos cachorros</h1>
    <p><strong>$nome_cachorro_1</strong> Agora tem <strong>$comida_cachorro_1</strong> unidades de comida</p>
    <p><strong>$nome_cachorro_2</strong> Está com sono? <strong>" , ($sono_cachorro_2 ? 'Sim' : 'Não') ,"</strong></p>
</body>
</html>";
?>
