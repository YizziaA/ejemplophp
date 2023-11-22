<?php
class mascota
{
	private $pdo;
    
	public $idmascota;
    public $nombre;
    public $especie;
    public $raza;
    public $fecha_de_nacimiento;
    public $color;
	public $tamaño;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM mascota");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idmascota)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM mascota WHERE idmascota = ?");
			          

			$stm->execute(array($idmascota));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idmascota)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM mascota WHERE idmascota = ?");			          

			$stm->execute(array($idmascota));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE mascota SET 
						nombre        = ?,
                        especie        = ?,
						raza            = ?, 
						fecha_de_nacimiento = ?,
						color = ?,
						tamaño = ?
				    WHERE idmascota = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->especie,
                        $data->raza,
                        $data->fecha_de_nacimiento,
						$data->color,
						$data->tamaño,
                        $data->idmascota
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `mascota` (nombre,especie,raza,fecha_de_nacimiento,color,tamaño) 
		        VALUES ( ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->nombre,
                        $data->especie,
                        $data->raza,
                        $data->fecha_de_nacimiento,
						$data->color,
						$data->tamaño                 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
