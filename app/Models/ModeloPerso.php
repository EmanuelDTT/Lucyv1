<?php
namespace App\Models;
use CodeIgniter\Model;
class ModeloPerso extends Model {
        
    public function obtener(){
            $persona = $this ->db->query("SELECT * FROM Persona"); 
            return $persona->getResult();

        }

        public function insertar($datos){

            $persona =$this->db->table('Persona');
            $persona->insert($datos);

            return $this->db->insertID(); 
        }
}