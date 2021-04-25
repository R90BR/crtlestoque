<?php
require_once("../model/conexao_database.php");

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

    private function criarFormulario($id){
        $row = $this->editar->buscarEstoque($id);
        $this->nome=$row['nome'];
        $this->situacao=$row['situacao'];
        $this->tipo=$row['tipo'];
        $this->quantidade=$row['quantidade'];
        $this->observacao=$row['observacao'];
        
      
        
        

    }

    public function atualizarEquipamento($nome,$situacao,$tipo,$quantidade,$observacao,$id){
        

       $this->editar->atualizarEstoque($nome,$situacao,$tipo,$quantidade,$observacao,$id);
       header('location: ../view/listarEstoque.php');
       


    }

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
    echo 'foiii';
    $editar->atualizarEquipamento($_POST['nome'], $_POST['situacao'],$_POST['tipo'],$_POST['quantidade'], $_POST['observacao'],$_POST['id']);
}


?>