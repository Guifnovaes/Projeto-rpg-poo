<?php
require_once 'Player.php';
require_once 'Inventario.php';
require_once 'Item.php';

$player1 = new Player("Tião carreiro");
$player2 = new Player("GFM O BALUDO");


$item1 = new Ataque("Peixeira");
$item2 = new Ataque("Enxadete");
$item3 = new Defesa("Panela protetora(Escudo)");
$item4 = new Defesa("Armadura");
$item5 = new Magia("Bola de Fogo");
$item6 = new Magia("Cura");

$player1->coletarItem($item1);
$player1->coletarItem($item3);
$player1->coletarItem($item5);

$player2->coletarItem($item2);
$player2->coletarItem($item4);
$player2->coletarItem($item6);



echo "<br>";
echo "Capacidade livre de {$player1->getNickname()}: " . $player1->getInventario()->getCapacidadeLivre() . "\n";
$player1->coletarItem($item6); 

echo "<br>";
$player1->subirNivel();
echo "{$player1->getNickname()} subiu para o nível {$player1->getNivel()}!\n";
echo "Nova capacidade livre: " . $player1->getInventario()->getCapacidadeLivre() . "\n";
?>
