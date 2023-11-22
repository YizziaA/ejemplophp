<?php
require_once 'Model/mascota.php';

class mascotaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new mascota();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/mascota.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new mascota();
        
        if(isset($_REQUEST['idmascota'])){
            $alm = $this->model->getting($_REQUEST['idmascota']);
        }
        
        require_once 'View/header.php';
        require_once 'View/mascota-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new mascota();
        
        $alm->idmascota = $_REQUEST['idmascota'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->especie = $_REQUEST['especie'];
        $alm->raza = $_REQUEST['raza'];
        $alm->fecha_de_nacimiento = $_REQUEST['fecha_de_nacimiento'];
        $alm->color = $_REQUEST['color'];
        $alm->tamaño = $_REQUEST['tamaño'];

        // SI ID mascota ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA mascota, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idmascota > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idmascota > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idmascota']);
        header('Location: index.php');
    }
}
