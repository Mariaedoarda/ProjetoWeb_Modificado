<?php

Class Pessoa{
     private $nome;
     private $endereco;

     public function setNome($nome){
         $this->nome = $nome;
     }

     public function getNome(){
         return $this->nome;
     }

     public function getEndereco(){
        return $this->endereco;
     }

}
?>