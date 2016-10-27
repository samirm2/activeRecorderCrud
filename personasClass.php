<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personasClass
 *
 * @author Samir Miranda
 */
switch ($_POST['op']){
    case 1: //insertar Persona
        $ob = new personasClass();
        $ob->setCedula($_POST['ced']);
        $ob->setNombres($_POST['nombr']);
        $ob->setApellidos($_POST['apell']);
        $ob->setNacimiento($_POST['fecha']);
        $ob->setEmail($_POST['email']);
        $ob->setDireccion($_POST['dir']);
        $ob->setTelefono($_POST['tel']);
    
        $rta = $ob->guardarPersona();
        echo json_encode($rta);
        break;
    case 0: //Lista de Personas
        $ob = new personasClass();
        echo json_encode($ob->listaPersonas());
        break;
    case 2: //eliminar Persona
        $ob = new personasClass();
        $ob->setCedula($_POST['ced']);
        echo json_encode($ob->eliminarPersona());
        break;
    case 3: //Modificar Persona
        $ob = new personasClass();
        $ob->setCedula($_POST['ced']);
        $ob->setNombres($_POST['nombr']);
        $ob->setApellidos($_POST['apell']);
        $ob->setNacimiento($_POST['fecha']);
        $ob->setEmail($_POST['email']);
        $ob->setDireccion($_POST['dir']);
        $ob->setTelefono($_POST['tel']);
        
        $rta = $ob->modificarPersona();
        echo json_encode($rta);
        break;
    case 4: //Consulta Individual
        $ob = new personasClass();
        $ob->setCedula($_POST['ced']);
        echo json_encode($ob->getPersona());
        break;
}

//include 'conexion.php';
class personasClass{
    private $cedula;
    private $nombres;
    private $apellidos;
    private $fNacimiento;
    private $email;
    private $direccion;
    private $telefono;
    
    function getCedula(){
        return $this->cedula;
    }
    
    function setCedula($value){
        $this->cedula = $value;
    }
    
    function getNombres(){
        return $this->Nombres;
    }
    
    function setNombres($value){
        $this->nombres = $value;
    }
    
    function getApellidos(){
        return $this->apellidos;
    }
    
    function setApellidos($value){
        $this->apellidos = $value;
    }
    
    function getNacimiento(){
        return $this->fNacimiento;
    }
    
    function setNacimiento($value){
        $this->fNacimiento = $value;
    }
    
    function getEmail(){
        return $this->email;
    }
    
    function setEmail($value){
        $this->email = $value;
    }
    
    function getDireccion(){
        return $this->direccion;
    }
    
    function setDireccion($value){
        $this->direccion = $value;
    }
    
    function getTelefono(){
        return $this->telefono;
    }
    
    function setTelefono($value){
        $this->telefono = $value;
    }

    function guardarPersona(){
        include 'conexion.php';
        $cnx = new Mysql();
        $query = "insert into personas (cedula,nombres,apellidos,fnacimiento,email,direccion,telefono) values (".$this->cedula.",'".$this->nombres."','".$this->apellidos."','".$this->fNacimiento."','".$this->email."','".$this->direccion."',".$this->telefono.")";
        if ($cnx->ejecutarDml($query)>0) {
            return ['ban' => true];
        }else{
            return ['ban' => false, 'error' => $cnx->ejecutarDml($query)];
        }
        $cnx->desconectar();
    }
    
    function listaPersonas(){
        include 'conexion.php';
        $cnx = new Mysql();
        $array = array();
        $query = "select * from personas";
        $rsult = $cnx->consultar($query);
        if ($cnx->contarRegistros($rsult)>0){
            $array['ban'] = true;
            while($row = mysqli_fetch_assoc($rsult)){
                $array['datos'][] = $row; 
            }
        }else{
            $array['ban'] = false;
        }
        $cnx->desconectar();
        return $array;
    }
    
    function getPersona(){
        include 'conexion.php';
        $cnx = new Mysql();
        $array = array();
        $query = "select * from personas where cedula =".$this->cedula;
        $rsult = $cnx->consultar($query);
        $array = mysqli_fetch_assoc($rsult); 
        $cnx->desconectar();
        return $array;
    }
    
    function modificarPersona(){
        include 'conexion.php';
        $cnx = new Mysql();
        $query = "update personas set nombres='".$this->nombres."',apellidos='".$this->apellidos."',fnacimiento='".$this->fNacimiento."',email='".$this->email."',direccion='".$this->direccion."',telefono=".$this->telefono." where cedula =".$this->cedula;
        if ($cnx->ejecutarDml($query)>0) {
            return ['ban' => true];
        }else{
            return ['ban' => false, 'error' => $cnx->ejecutarDml($query)];
        }
        $cnx->desconectar();
    }
    
    function eliminarPersona(){
        include 'conexion.php';
        $cnx = new Mysql();
        $query = "delete from personas where cedula = ".$this->cedula;
        if ($cnx->ejecutarDml($query)>0) {
            return ['ban' => true];
        }else{
            return ['ban' => false, 'error' => $cnx->ejecutarDml($query)];
        }
        $cnx->desconectar();
    }
    
    }
