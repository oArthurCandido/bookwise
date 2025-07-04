<?php
require_once 'functions.php';
class Celular {
    public $tamanho;
    public $cor;

    private function ligarInterno(){
        echo "Estou ligando!";
    }

   public function ligarExterno(){
    $this->ligarInterno();
   }

}

$celular1 = new Celular;

$celular1->tamanho = "Small";
$celular1->cor = "white";
$celular1->ligarExterno();
dd($celular1);
dd($celular1->ligar());