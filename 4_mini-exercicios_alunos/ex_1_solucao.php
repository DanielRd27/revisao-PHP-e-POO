<?php
// <!-- 1ª Digitação (Aqui) -->

// <!-- abstract molde do molde e é usado pra servir de herança pra outras classes -->

// <!-- Classe abstrata para itens de uma bliblioteca como livros ou revistas -->

// Item recebe valor de disponivel ou n caso true esta disponivel e ja foi devolvido caso false esta emprestado ou indisponivel

abstract class itemBiblioteca {
    protected string $titulo;
    protected string $codigo;
    protected bool $disponivel;

    public function __construct (string $titulo, string $codigo){
        $this->titulo = $titulo;
        $this->codigo = $codigo;
        $this->disponivel = true;
    }

    // Métodos para emprestar (fuc 1) e devolvar (fuc 2) itens
    
    protected function emprestar(): string {
        if ($this->disponivel) {
            $this->disponivel = false;
            return "Item '{$this->titulo}' emprestado com sucesso";
        } 
        return "Item '{$this->titulo}' não está disponível";
    }

    protected function devolver(): string {
        if ($this->disponivel) {
            $this->disponivel = true;
            return "Item '{$this->titulo}' devolvido com sucesso";
        } 
        return "Item '{$this->titulo}' já está na biblioteca";
    }

    // Método abstratos
    
    public abstract function calcular_multa(int $dias_de_atraso) : float;

    // Getters e setters

    public function getDisponivel(): bool {
        return $this->disponivel;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

}

class livro extends itemBiblioteca {
    protected $dias_de_atraso;
    private float $multa_por_dia;

    public function __construct(string $titulo,string $codigo)
    {
        parent::__construct($titulo, $codigo);
        $this->multa_por_dia = 0.5;
    }

    public function calcular_multa(int $dias_de_atraso): float
    {
        // Multa por dia - revista
        return $dias_de_atraso * $this->multa_por_dia;
    }
}

class revista extends itemBiblioteca {
    protected $dias_de_atraso;
    private float $multa_por_dia;


    public function __construct(string $titulo,string $codigo)
    {
        parent::__construct($titulo, $codigo);
        $this->multa_por_dia = 0.25;
    }

    public function calcular_multa(int $dias_de_atraso): float
    {
        // Multa por dia - livros
        return $dias_de_atraso * $this->multa_por_dia;
    }
}

class Biblioteca {
    // Criando um dicionario
    private array $itens = [];

    // Métodos para gerenciar (adicionar, emprestar e devolver itens)
    public function adicionarItem(itemBiblioteca$item): string {
        $this->itens[$item->getTitulo()] = $item;
        return "item '{$item->getTitulo()}' adicionado ao acervo";
    }

    public function emprestarItem(itemBiblioteca$item): string {
        return isset ($this->itens[$item->getTitulo()]) ? $this->itens[$item->getTitulo()]->emprestar : "Item não encontrado nos arquivos da biblioteca";
    }

    public function devolverItem(itemBiblioteca$item): string {
        return isset ($this->itens[$item->getTitulo()]) ? $this->itens[$item->getTitulo()]->devolver : "Item não encontrado nos arquivos da biblioteca";
    }
}

// criando biblioteca

$biblioteca1 = new Biblioteca;

// Criando livros e revistas

$livro1 = new Livro ("Python para Iniciantes", 001);
$revista1 = new Revista ("TechNews", 001);

// Adicionanod livros 

echo $biblioteca1->adicionarItem($livro1) . PHP_EOL;
echo $biblioteca1->adicionarItem($revista1) . PHP_EOL;

echo $biblioteca1->emprestarItem($livro1) . PHP_EOL;
echo $biblioteca1->emprestarItem($revista1) . PHP_EOL;

echo $biblioteca1->devolverItem($livro1) . PHP_EOL;

echo $livro1->calcular_multa(5) . PHP_EOL;
echo $revista1->calcular_multa(5) . PHP_EOL;

?>