<?php
class Item {
    public $nome;
    public $tamanho;
    public $classe;

    public function __construct($nome, $tamanho, $classe) {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function getClasse() {
        return $this->classe;
    }
}

class Ataque extends Item {
    public function __construct($nome) {
        parent::__construct($nome, 7, "Ataque");
    }
}

class Defesa extends Item {
    public function __construct($nome) {
        parent::__construct($nome, 4, "Defesa");
    }
}

class Magia extends Item {
    public function __construct($nome) {
        parent::__construct($nome, 2, "Magia");
    }
}
?>
