<?php
class HomeModel extends MainModel
{
    public function list(){
        $sql="SELECT description, date, value FROM moviment";
        $retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
        }
        return $resultado;
        }
    public function listInput(){
        $sql="SELECT value FROM moviment where type = 'input'";
        $retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
        }
        return $resultado;
        }
    public function listOutput(){
        $sql="SELECT value FROM moviment where type = 'output'";
        $retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
        }
        return $resultado;
        }
    public function listSumOutput(){
        $sql="SELECT SUM(value) FROM moviment where type = 'output'";
        $retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
        }
        return $resultado;
        }
    public function ListSumInput(){
        $sql="SELECT SUM(value) FROM moviment where type = 'Input'";
        $retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
        }
        return $resultado;
        }
}