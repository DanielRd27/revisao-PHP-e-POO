Que temas ou áreas o museu mais tem estudado hoje em dia na zoologia? -> anny

Quais animais ou grupos de animais o pessoal do museu tem pesquisado mais ultimamente?

Como as pesquisas feitas no museu ajudam na proteção e conservação dos animais?

O museu costuma fazer parcerias com outras instituições? Pode dar exemplos?

O museu acompanha ou faz algum tipo de controle dos animais da coleção com o tempo?



......................................................................................................................................................


Medicina tradicional no Quilombo Kalunga (Goiás)
A comunidade Kalunga, localizada na região da Chapada dos Veadeiros (GO), é uma das mais conhecidas comunidades quilombolas do Brasil. Eles mantêm vivas muitas práticas tradicionais, especialmente no cuidado com a saúde, que mistura o uso de plantas medicinais, orações e saberes passados pelos mais velhos.

Entre os Kalunga, a raizeira ou benzedeira tem um papel importante. Essas pessoas conhecem o poder das plantas do cerrado e sabem exatamente como usar cada uma. Por exemplo, o barbatimão é usado para tratar infecções e feridas, o alecrim-do-campo para dores de cabeça e o chá de jurubeba para problemas no fígado. Muitas vezes, esses remédios são acompanhados de rezas e benzeduras, que fazem parte da cura.

O conhecimento vem dos ancestrais, passado oralmente, e ainda é muito respeitado. Apesar de hoje existirem postos de saúde na região, a medicina tradicional continua sendo uma das formas principais de cuidado, principalmente porque é acessível, confiável para a comunidade e faz parte da identidade Kalunga.

Preservar esse saber é essencial não só para a saúde da comunidade, mas também para a valorização da cultura afro-brasileira e da biodiversidade do cerrado.




.............


🌿 Formas de uso das plantas medicinais pelos Kalunga:
Chás e infusões

Feitos com folhas, cascas, raízes ou flores

Tratam gripes, febres, dores, problemas digestivos


Banhos medicinais

Para aliviar estresse, cansaço e “mau-olhado”

Usados em curas físicas e espirituais


Compressas e emplastros

Folhas amassadas ou cozidas aplicadas na pele

Usados em feridas, inchaços, picadas e inflamações


Garrafadas

Mistura de ervas com álcool (como cachaça)

Tratam doenças crônicas e fortalecem o corpo


Defumações

Queima de plantas para purificar ambientes e curar espiritualmente

🌱 Exemplos de plantas medicinais usadas:
Arnica-do-campo – para dores e pancadas

Barbatimão – cicatrizante e antisséptico

Boldo-do-cerrado – para problemas digestivos

Cagaita – laxante e calmante natural

Guapeva – usada em banhos de purificação

----------------------------------------------------------

<?php
// ==================================
// SISTEMA DE LOCADORA DE VEÍCULOS
// ==================================

// Classe abstrata Base
abstract class Veiculo {
    protected string $modelo;
    protected string $placa;
    protected bool $disponivel;

    // Inicialização com método Construtor
    public function __construct(string $modelo, string $placa) {
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->disponivel = true;
    }

    // Método abstrato (Não implementado agora)
    abstract public function calcularAluguel(int $dias): float;

    // Métodos concretos (Já implementados)
    public function isDisponivel(): bool {
        return $this->disponivel;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function alugar(): bool {
        if ($this->disponivel) {
            $this->disponivel = false;
            return true;
        }
        return false;
    }

    public function devolver() {
        $this->disponivel = true;
    }
}

// Classes Concretas (Carro e Moto)
// Pilar da Herança aplicado abaixo
class Carro extends Veiculo {
    public function calcularAluguel(int $dias): float {
        return $dias * 100.00;
    }
}

class Moto extends Veiculo {
    public function calcularAluguel(int $dias): float {
        return $dias * 50.00;
    }
}

// Classe gerenciadora (Locadora)
class Locadora {
    // Array
    private array $veiculos = [];

    // Métodos para gerenciar (adicionar, alugar e devolver)
    public function adicionarVeiculo(Veiculo $veiculo) {
        $this->veiculos[$veiculo->getModelo()] = $veiculo;
        echo "Veículo '{$veiculo->getModelo()}' adicionado ao acervo.<br>";
    }

    public function alugarVeiculo(string $modelo) {
        if (isset($this->veiculos[$modelo])) {
            $veiculo = $this->veiculos[$modelo];
            if ($veiculo->alugar()) {
                $tipo = get_class($veiculo);
                echo "$tipo '{$modelo}' alugado com sucesso!<br>";
            } else {
                echo "O veículo '{$modelo}' já está alugado.<br>";
            }
        } else {
            echo "Veículo '{$modelo}' não encontrado.<br>";
        }
    }

    public function devolverVeiculo(string $modelo) {
        if (isset($this->veiculos[$modelo])) {
            $this->veiculos[$modelo]->devolver();
            $tipo = get_class($this->veiculos[$modelo]);
            echo "$tipo '{$modelo}' devolvido com sucesso!<br>";
        } else {
            echo "Veículo '{$modelo}' não encontrado.<br>";
        }
    }

    public function calcularValorAluguel(string $modelo, int $dias) {
        if (isset($this->veiculos[$modelo])) {
            $valor = $this->veiculos[$modelo]->calcularAluguel($dias);
            $tipo = get_class($this->veiculos[$modelo]);
            echo "Valor do aluguel do " . strtolower($tipo) . " por $dias dias: R$" . number_format($valor, 2) . "<br>";
        }
    }
}

// Criando um Objeto/Instância
$locadora = new Locadora();

// Criando itens (Carro e Moto 1)
$carro1 = new Carro("HB20", "ABC1234");
$moto1 = new Moto("Yamaha XTZ", "XYZ9876");

// Adicionar itens a locadora e exibir
$locadora->adicionarVeiculo($carro1);
$locadora->adicionarVeiculo($moto1);

echo "<br>";

$locadora->alugarVeiculo("HB20");
$locadora->alugarVeiculo("Yamaha XTZ");

echo "<br>";

$locadora->devolverVeiculo("HB20");

echo "<br>";

$locadora->calcularValorAluguel("HB20", 3);
$locadora->calcularValorAluguel("Yamaha XTZ", 3);
?>
