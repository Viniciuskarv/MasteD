<?php
    class equipa {
        public $nome;
        public $perdidos;
        public $ganhos;

        public function __construct($nome, $perdidos, $ganhos){
            $this->nome = $nome;
            $this->perdidos = $perdidos;
            $this->ganhos = $ganhos;
        }
        public function lerNome(){
            return $this->nome;
        }
        public function lerGanhos(){
            return $this->ganhos;
        }
        public function lerPerdidos(){
            return $this->perdidos;
        }
        public function qualidade(){
            return(($this ->ganhos * 100)/($this ->ganhos + $this ->perdidos));
        }
        public function somarVitoria(){
            $this ->ganhos++;
        }
        public function somarDerrota(){
            $this ->perdidos++;
        }
    }
    $objeto = new equipa('Lisboa',5,5);
    $objeto2 = new equipa('Porto',2,7);

    $objeto->somarVitoria();      // cada vez que chamar a funçao é adicionado
    $objeto->somarVitoria();



    $objeto2->somarVitoria();
    $objeto->somarDerrota();


    echo $objeto->lerNome().' com '.$objeto->lerGanhos().' jogos ganhos e '.$objeto->lerPerdidos().' pedidos, tem uma qualidade média de '.$objeto->qualidade().'<br>';
    echo $objeto2->lerNome().' com '.$objeto2->lerGanhos().' jogos ganhos e '.$objeto2->lerPerdidos().' pedidos, tem uma qualidade média de '.$objeto2->qualidade().'<br>';

?>