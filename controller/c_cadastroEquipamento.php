<?php
require_once("../model/conexao_database.php");

class cadastroController{

    private $cadastro;

    


    public function __construct($nome, $situacao, $tipo, $quantidade, $observacao){
        $this->cadastro = new ConexaoDatabase();
        $this->cadastro -> setEstoque($nome, $situacao, $tipo, $quantidade, $observacao); 
        
    }

    
    
}
new cadastroController($_POST['nome'], $_POST['situacao'],$_POST['tipo'],$_POST['quantidade'], $_POST['observacao']);
?>
