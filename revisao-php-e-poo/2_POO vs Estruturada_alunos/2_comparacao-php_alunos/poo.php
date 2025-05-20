<?php
// ==========================================
// PARTE 2: PROGRAMAÇÃO ORIENTADA A OBJETOS
// ==========================================

class cachorro {
    private $nome;
    private $comida;
    private $sono;

    public function __construct($nome, $comida, $sono) {
        $this->nome = $nome;
        $this->comida = $comida;
        $this->sono = $sono;
    }

    public function comer() {
        $this->comida -= 1;
    }

    public function dormir() {
        $this->sono = false;
    }

    // GETters e SETtes comuns no php
    public function getNome() {
        return $this->nome;
    }

    public function getComida() {
        return $this->comida;
    }

    public function getSono() {
        return $this->sono;
    }
}

$cachorro1 = new cachorro("Nelson", 3, false);
$cachorro2 = new cachorro("Jeremias", 1, true);

$cachorro1->comer();
$cachorro1->dormir();

// Exibindo os resultados no navegador
echo "<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultados dos Cachorros (POO)</title>
</head>
<body>
    <h1>Resultados dos Cachorros (POO)</h1>
    <p><strong>". $cachorro1->getNome() ."</strong> agora tem <strong>". $cachorro1->getComida() ."</strong> unidades de comida.</p>
    <p><strong>". $cachorro2->getNome() ."</strong> está com sono? <strong>" . ($cachorro2->getSono() ? 'Sim' : 'Não') . "</strong></p>
</body>
</html>";
?>