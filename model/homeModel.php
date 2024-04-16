<?php
    class homeModel{
        private $PDO;
        public function __construct(){
            require_once("C://xampp/htdocs/login/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();    
        } 
        public function agregarNuevoUsuario($correo,$password){
          $statement = $this->PDO->prepare("INSERT INTO usuarios values(null, :correo, :password)");
          $statement->bindParam(":correo",$correo);
          $statement->bindParam(":password",$password);
          try{
            $statement->execute();
            return true;
          }catch(PDOException $th){
            return false;
          }
        }
        public function obtenerclave($correo){
            $statement = $this->PDO->prepare("SELECT password FROM usuarios where correo = :correo");
            $statement->bindParam(":correo",$correo);
            return ($statement->execute()) ? $statement->fetch()['password']: false;
        }  
    }