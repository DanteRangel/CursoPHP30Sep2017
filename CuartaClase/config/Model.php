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
				return json_encode($result);
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
	}
?>