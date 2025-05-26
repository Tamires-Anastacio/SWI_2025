<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        //construtor para inicializar o nome, preço e a quantidade
        public function __construct($nome, $preco, $quantidade = 0){
            $this->Nome = $nome_produto;
            $this->Preco = $preco_produto;
            $this->Quantidade = $quant_produto;
        }

        //Getters
        public function getNome(){
            return $this->Nome;
        }

        public function getPreco(){
            return $this->Preco;
        } 

        //Setters
        public function setNome($nome){
            return $this->Nome;
        }
        public function setPreco($valor){
            return $this->Preco = $valor;
        }
    }

    public function AdicionarEstoque($quantidade){
        if($quantidade>0){
            $this->Quantidade += $quantidade;

        }else{
            echo "A quantidade não pode ser negativa ou zerada.";
        }
    }

    public function RemoverEstoque($quantidade){
        if($quantidade>0 && $quantidade<=$this->Quantidade){
            $this->Quantidade -= $quantidade;
        }else{
            echo "A quantidade não pode ser negativa ou zerada.";
        }
    }
    public function MostrarDetalhes(){
        echo "NOME:" . $this->getNome() . "<br>";
        echo "PREÇO: R$" . number_format($this->getPreco(),2,',','.') . "<br>";
        //echo "PREÇO: R$" . $this->Preco . "<br>";
        echo "QUANTIDADE:" . $this->Quantidade . "<br>";
    }

?>