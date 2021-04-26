<?php
require_once("../model/conexao_database.php");

/*

    cadastroController (nome, situacao, tipo, quantidade, observacao) -  recebe as variaveis do formulario de cadastro
    
    


*/ 

class cadastroController {

    private $cadastro;
    private $modo;
    private $data;
    


    public function __construct($nome, $situacao, $tipo, $quantidade, $observacao){
         
        // $modo = 'Cadastro';
         //$data = '23/05/1990';
        //chama classe ConexaoDatabase, e cria um novo objeto.
        $this->cadastro = new ConexaoDatabase();

        //chama a função da do ConexaoDatabase.
        //setEstoque - função armazena as variaveis dentro do banco de dados.
        $this->cadastro -> setEstoque($nome, $situacao, $tipo, $quantidade, $observacao); 
        //header('location: ../view/cadastrarEquipamento.php');
        
        
    }

    
    
}
new cadastroController($_POST['nome'], $_POST['situacao'],$_POST['tipo'],$_POST['quantidade'], $_POST['observacao']);
?>
