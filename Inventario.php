<?php
class Inventario {
    private $capacidadeMaxima;
    private $itens = [];

    public function __construct($capacidadeMaxima) {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getCapacidadeMaxima() {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima($capacidade) {
        $this->capacidadeMaxima = $capacidade;
    }

    public function getCapacidadeLivre() {
        $ocupado = array_reduce($this->itens, function ($total, $item) {
            return $total + $item->getTamanho();
        }, 0);
        return $this->capacidadeMaxima - $ocupado;
    }

    public function adicionarItem(Item $item) {
        if ($this->getCapacidadeLivre() >= $item->getTamanho()) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

    public function removerItem(Item $item) {
        foreach ($this->itens as $key => $i) {
            if ($i === $item) {
                unset($this->itens[$key]);
                $this->itens = array_values($this->itens); 
                return true;
            }
        }
        return false;
    }

    public function listarItens() {
        return $this->itens;
    }
}
?>
