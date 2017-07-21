<?php
class contact{
  function __construct($datosConexionBD){
    $this->datosConexionBD=$datosConexionBD;
  }
  
  function saveComment()
  {
    $conexion = new PDO('mysql:host='.$this->datosConexionBD[0].';dbname='.$this->datosConexionBD[3], $this->datosConexionBD[1], $this->datosConexionBD[2]);
						$conexion -> exec("set names utf8");
						$query = "INSERT INTO comments
								(name,
								email,
								city,
								comment)
								VALUES ('".$this->name."',
								'".$this->email."',
								'".$this->city."',
								'".$this->comment."')";
						$statement = $conexion->prepare($query);
						$statement->execute();
            if($statement->rowCount() > 0)
            {
              return true;
            }else{
              return false;
            }
  }
	
	function getLastComments($limit = 6)
	{
		if(!is_int($limit) || $limit < 1)
		{
			$limit = 6;
		}
		$conexion = new PDO('mysql:host='.$this->datosConexionBD[0].';dbname='.$this->datosConexionBD[3], $this->datosConexionBD[1], $this->datosConexionBD[2]);
		$conexion -> exec("set names utf8");
		$query = "SELECT * FROM `comments` ORDER BY id DESC LIMIT $limit";
		$statement = $conexion->prepare($query);
		$statement->execute();
		if($statement->rowCount() > 0)
		{
			return $statement;
		}
		else
		{
			return false;
		}
	}
  
}
  ?>