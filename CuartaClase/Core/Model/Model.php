<?php
	include './Conexion.php';
	Class Model extends Conexion{
		public $atributos=array();
		public $table;
		public $primaryKey;

		public static function create($atributos=array()){
			if(count($atributos)>0){
				$contador=0;
				$sql='INSERT INTO '.$this->table.' ('.$this->sql_array($atributos,'llave').') VALUE ('.$this->sql_array($atributos,'valor').');';
				echo $sql;
			}else{
				return array('code'=>0,'message'=>'error');
			}
		}
		public function sql_array($atributos,$bandera){
			$sql="";
			$contador=0;

			foreach ($atributos as $atributo => $valor) {
				$sql.=($bandera=='valor')? $valor :(($bandera=='llave')? $atributo:'');
				if(count($atributos)-1>$contador){
					$sql.=',';
					$contador++;
				}
			}
	
			
			return $sql;
		}
		public function all($atributos=array()){
			if(count($atributos)>0){
				$sql='SELECT '.$this->sql_array($atributos,'valor').' FROM '.$this->table;

			}else{
				$sql='SELECT * FROM '.$this->table;
			}
			#echo $sql;
			$result=[];
			$resultado=$this->con->query($sql);
			$i=0;
			while($row=$resultado->fetch_assoc()){
				
				$result[$i]=$row;
				$i++;
			}
			return json_encode($result);
		}
		public function destroy($ids=array()){
			$sql="";
			for($i=0;$i<count($ids);$i++){
				$sql.='DELETE FROM '.$this->table.' WHERE id='.$this->sql_array([$ids[$i]]).';';
			}
			echo $sql;
			#$resutlado=$this->con->query($sql);
			#var_dump($resultado);
		}
		public function delete(){
			$sql='DELETE FROM '.$this->table.' WHERE '.$this->atributos[$this->primaryKey].'=';
		}



		public function getAttribute($this->atributos){
			$atributos=[];
			for($i=0;$i<count($this->atributos);$i++){
				$atributos[$this->atributos[$i]]='';
			}
			$this->atributos=$atributos;

		}
	}


?>