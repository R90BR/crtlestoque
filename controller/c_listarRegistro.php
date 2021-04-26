<?php
require_once("../model/conexao_database.php");

/*

    listarEstoque () -  classe carrega todos elementos do banco de dados e lista na tabela
    
    


*/
class listarRegistro{

    private $lista;

    public function __construct(){
        $this->lista = new ConexaoDatabase();
        $this->criarTabela();

    }
    
    private function criarTabela(){
        //carrega o array vindo do conexao_database e separa as variaveis para imprimir na tabela
        $row = $this->lista->getRegistro();
        if(!$row== NULL){
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['modo'] ."</td>";
            echo "<td>".$value['data'] ."</td>";
            
            
            
            
            echo "</tr>";
        }
      }
    }
}

