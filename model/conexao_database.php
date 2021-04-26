<?php

require_once("../model/config.php");


class ConexaoDatabase{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }


    //guarda as variaveis no banco de dados
    public function setEstoque($nome,$situacao,$tipo,$quantidade,$observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO equipamento (`nome`, `situacao`, `tipo`, `quantidade`, `observacao`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$situacao,$tipo,$quantidade,$observacao);
         if( $stmt->execute() == TRUE){
            $date = date('Y/m/d');
            $this->setRegistro($nome,'cadastro',$date);
            
            
            exit;
            return true ;
        }else{
            return false;
        }

    }
    
    //le a tabela do banco de dados e retorna um vertor
    public function getEstoque(){
        $array = [];
        $result = $this->mysqli->query("SELECT * FROM equipamento");
        
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }
    
    //recebe o id do equipamento a ser deletado 
    public function deletaEquipamento($id){
        if($this->mysqli->query("DELETE FROM `equipamento` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    
    //atualiza os dados do item escolhido 
    public function atualizarEstoque($nome,$situacao,$tipo,$quantidade,$observacao,$id){
        $stmt = $this->mysqli->prepare("UPDATE `equipamento` SET `nome` = ?, `situacao`=?, `tipo`=?, `quantidade`=?, `observacao`=? WHERE `nome` = ?");
        $stmt->bind_param("ssssss",$nome,$situacao,$tipo,$quantidade,$observacao,$id);
        if($stmt->execute()==TRUE){
            $date = date('Y/m/d');
            $this->setRegistro($nome,'atualização',$date);
            return true;
        }else{
            return false;
        }
    }
   
    //retorna o item escolhido 
    public function buscarEstoque($nome){
        $result = $this->mysqli->query("SELECT * FROM equipamento WHERE nome='$nome'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    
    public function setRegistro($nome,$modo,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO registros (`nome`, `modo`,`data` ) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$modo,$data);
         if( $stmt->execute() == TRUE){
            header('location: ../view/index.php');
            exit;
            return true ;
        }else{
            return false;
        }

    }

    public function getRegistro(){
        $array = [];
        $result = $this->mysqli->query("SELECT * FROM registros");
        
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }
    
}
?>
