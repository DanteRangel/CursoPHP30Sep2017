<?php
	include 'Conexion.php';

	Class Model extends Conexion{
		public $atributos=[];
		public $table;
		public $primaryKey;

		public function save($atributos=array()){
			$sql='INSERT INTO '.$this->table.' ('.$this->sql_array($atributos,'llave').') VALUE('.$this->sql_array($atributos,'valor').')';
			$resultado=$this->con->query($sql);
			return $resultado;
		}
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
				if($bandera=='llave')
					$sql.=$atributo;
				else if($bandera=='valor')
					$sql.='\''. $valor.'\'';
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
			return $resultado->fetch_assoc();
		}
		public function update($atributos,$id){
			$contador=0;
			$sql='UPDATE '.$this->table.' SET ';
			foreach ($atributos as $llave => $valor) {
				$sql.=$llave.'="'.$valor.'"';
				if(count($atributos)-1>$contador){
					$sql.=',';
					$contador++;
				}
			}
			$sql.=' WHERE id='.$id;
			$resultado=$this->con->query($sql);
			return $resultado;
		}
		public function delete($id){
			$sql='DELETE FROM '.$this->table.' WHERE id='.$id;
			$resultado=$this->con->query($sql);
			return $resultado;	
		}
		public function destroy($arreglo=array()){
			$sql='';
			for($i=0;$i<count($arreglo);$i++){
				$sql.='DELETE FROM '.$this->table.' WHERE id='.$arreglo[$i].';';
			}
			
			$resultado=$this->con->query($sql);
			return $resultado;	
		}
	}
?>