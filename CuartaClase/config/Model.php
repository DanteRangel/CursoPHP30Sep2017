<?php
	include 'Conexion.php';

	Class Model extends Conexion{
		public $atributos=[];
		public $table;
		public $primaryKey;


		public function all($atributos=array()){
				$sql='';
				if(count($atributos)>0){
					$sql='SELECT '.$this->sql_array($atributos,'valor').' FROM '.$this->table;
				}else{
					$sql='SELECT * FROM '.$this->table;
				}
				$result=[];
				$resultado=$this->con->query($sql);
				$i=0;
				while($row=$resultado->fetch_assoc()){
					$result[$i]=$row;
					$i++;
				}
				return $result;
		}

		public function sql_array($atributos,$bandera){
			$sql="";
			$contador=0;
			foreach ($atributos as $atributo => $valor) {
				$sql.=($bandera=='valor')? ($valor): (($bandera=='llave')?$atributo:'');
				if(count($atributos)-1>$contador){
					$sql.=',';
					$contador++;
				}
			}
			return $sql;
		}
		public function find($id){
			$sql='SELECT * FROM '.$this->table.' WHERE id='.$id;
				$resultado=$this->con->query($sql);
				$i=0;
				$result=[];
				while($row=$resultado->fetch_assoc()){
					$result[$i]=$row;
					$i++;
				}
				return $result[0];
		}
		public function update($array,$id){
			$contador=0;
			$sql='UPDATE '.$this->table.' SET ';
				foreach($array as $llave=>$valor){
					$sql.=$llave.'="'.$valor.'"';
					if(count($array)-1>$contador){
						$sql.=',';
						$contador++;
					}
				}
			$sql.=' WHERE id='.$id;
			$resultado=$this->con->query($sql);
			return $resultado;
		}
	}
?>