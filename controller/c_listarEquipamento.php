<?php
require_once("../model/conexao_database.php");

/*

    listarEstoque () -  classe carrega todos elementos do banco de dados e lista na tabela
    
    


*/
class listarEstoque{

    private $lista;

    public function __construct(){
        $this->lista = new ConexaoDatabase();
        $this->criarTabela();

    }
    
    private function criarTabela(){
        //carrega o array vindo do conexao_database e separa as variaveis para imprimir na tabela
        $row = $this->lista->getEstoque();
        if(!$row== NULL){
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['situacao'] ."</td>";
            echo "<td>".$value['tipo'] ."</td>";
            echo "<td> ".$value['quantidade'] ."</td>";
            echo "<td>".$value['observacao'] ."</td>";
            echo "<td><a class='btn btn-warning' href='../view/editarEquipamento.php?id=".$value['nome']."'>Editar</a>";
            echo "<td><a class='btn btn-danger' href='../controller/c_deletarEquipamento.php?id=".$value['nome']."'>X</a></td>";
            
            
            echo "</tr>";
        }
      }
    }
}

