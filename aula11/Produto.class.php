<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        //construtor para inicializar o nome, preço e a quantidade
        public function __construct($nome, $preco, $quantidade = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;
        }

        //Getters
        public function getNome(){
            return $this->Nome;
        }

        public function getPreco(){
            return $this->Preco;
        }
        public function getQuantidade(){
            return $this->Quantidade;
        }

        //Setters
        public function setNome(){
            return $this->Nome;
        }
        public function setPreco($valor){
            return $this->Preco = $valor;
        }
        public function setQuantidade(){
            return $this->Quantidade
        }
    }


?>