<?php
// <!-- 1ª Digitação (Aqui) -->

// <!-- abstract molde do molde e é usado pra servir de herança pra outras classes -->

// <!-- Classe abstrata para itens de uma bliblioteca como livros ou revistas -->

// Item recebe valor de disponivel ou n caso true esta disponivel e ja foi devolvido caso false esta emprestado ou indisponivel

abstract class itemBiblioteca {
    protected string $nome;
    protected string $codigo;
    protected bool $disponivel;

    public function __construct (string $nome,string $codigo,bool $disponivel){
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->disponivel = $disponivel;
    }

    // Metodos para emprestar (fuc 1) e devolvar (fuc 2) itens
    
    public function emprestar(): void {
        $this->disponivel == false;
        // terminal ("Livro emprestado")
    }

    public function devolver(): void {
        $this->disponivel = true;
        // terminal ("Livro devolvido")
    }
    // Getters e setters

    public function getDisponivel(): bool {
        return $this->disponivel;
    }

    public function getTitulo(): string {
        return $this->nome;
    }

}

class livro extends itemBiblioteca {
    public function __construct(int $dias_de_atraso)
    {
        $this->dias_de_atraso = $dias_de_atraso;
    }
}

?>