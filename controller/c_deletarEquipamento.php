<?php
require_once("../model/conexao_database.php");

/*

    deletarEquipamento () -  classe para deletar equipamentos do banco de dados. 
    
    


*/

Class deletarEquipamento{

    private $deletar;

    public function __construct($id){

        $this->deletar = new ConexaoDatabase();
        //envia o id para a funcao deleta dentro do conexao_database
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