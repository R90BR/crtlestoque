<?php
require_once("../model/conexao_database.php");

Class deletarEquipamento{

    private $deletar;

    public function __construct($id){

        $this->deletar = new ConexaoDatabase();
        if($this->deletar->deletaEquipamento($id)== TRUE){
            echo $id;
            header('location: ../view/listarEstoque.php');

        }else{
            
            echo 'Erro ao excluir o Equipamento'. $id;

        }
    }




}


new deletarEquipamento($_GET['id']);
?>