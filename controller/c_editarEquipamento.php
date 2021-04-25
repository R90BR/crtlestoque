<?php
require_once("../model/conexao_database.php");

/*

    editarEquipamento () -  classe para editar os equipamentos ja inseridos no banco de dados
    
    


*/

Class editarEquipamento{
    
    private $editar;
    private $nome;
    private $situacao;
    private $tipo;
    private $quantidade;
    private $observacao;


    public function __construct($id){
       
        $this->editar = new ConexaoDatabase();
        
        $this-> criarFormulario($id);
        


    }
    // puxa as informações do banco e recria e separar as variaveis do formulario
    private function criarFormulario($id){
        $row = $this->editar->buscarEstoque($id);
        $this->nome=$row['nome'];
        $this->situacao=$row['situacao'];
        $this->tipo=$row['tipo'];
        $this->quantidade=$row['quantidade'];
        $this->observacao=$row['observacao'];
        
      
        
        

    }
    // atualiza as variaveis editadas no formulario e guarda no banco de dados
    public function atualizarEquipamento($nome,$situacao,$tipo,$quantidade,$observacao,$id){
        

       $this->editar->atualizarEstoque($nome,$situacao,$tipo,$quantidade,$observacao,$id);
       header('location: ../view/listarEstoque.php');
       


    }
    /*
      Funções auxiliares para preencher os campos do formulario editar 
    */
    public function getNome(){
        return $this->nome;
    }

    public function getSituacao(){
        return $this->situacao;

    }public function getTipo(){
        return $this->tipo;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getObservacao(){
        return $this->observacao;
    }

    
    

    

}

$id = filter_input(INPUT_GET, 'id');

$editar = new editarEquipamento($id);

if(isset($_POST['submit'])){
    
    $editar->atualizarEquipamento($_POST['nome'], $_POST['situacao'],$_POST['tipo'],$_POST['quantidade'], $_POST['observacao'],$_POST['id']);
}


?>