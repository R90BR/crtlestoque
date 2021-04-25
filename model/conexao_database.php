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

    public function setEstoque($nome,$situacao,$tipo,$quantidade,$observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO equipamento (`nome`, `situacao`, `tipo`, `quantidade`, `observacao`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$situacao,$tipo,$quantidade,$observacao);
         if( $stmt->execute() == TRUE){
            header('location: ../view/index.php');
            exit;
            return true ;
        }else{
            return false;
        }

    }

    public function getEstoque(){
        $array = [];
        $result = $this->mysqli->query("SELECT * FROM equipamento");
        
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deletaEquipamento($id){
        if($this->mysqli->query("DELETE FROM `equipamento` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function atualizarEstoque($nome,$situacao,$tipo,$quantidade,$observacao,$id){
        $stmt = $this->mysqli->prepare("UPDATE `equipamento` SET `nome` = ?, `situacao`=?, `tipo`=?, `quantidade`=?, `observacao`=? WHERE `nome` = ?");
        $stmt->bind_param("ssssss",$nome,$situacao,$tipo,$quantidade,$observacao,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function buscarEstoque($nome){
        $result = $this->mysqli->query("SELECT * FROM equipamento WHERE nome='$nome'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }

    
}
?>
