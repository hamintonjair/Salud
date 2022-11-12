<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitio_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->librarY("mongodb");
        $this->db = $this->mongodb->db()->eps;
    }

    public function insertar($data)
    {
        $resultado = $this->db->insertOne($data); 
       if($resultado ->getInsertedCount() > 0)
       {
           return array("guardado" => true, "id_eps" => $resultado->getInsertedId());
       }
       else
       {
           return array("guardado" => false);
       }
    }  
    public function delete($id)
    {
        return $resultado = $this->db->deleteOne(array(
            '_id' => $this->mongodb->getObjetId($id)));
    } 
   /*funcion para consultar los datos de la base de datos*/
    public function listar()
    {     
        try {

            return $this->db->find();         
      
         } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th){
         return null;
        }
    }  
          //buscar categorias para actualizar
          public function Buscar($id)
          {     
              try {
                  $resultado = $this->db->findOne(array(
                      '_id' => $this->mongodb->getObjetId($id)
                  ));
      
                  return $resultado;
            
               } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
               return null;
              }
          }  

      /*validamos si ya existe esta categoria*/
      public function Validar( $codigo)
      {
          try {
                $resultado = $this->db->findOne(array ( 
              'codigo' => $codigo
          ));
              return $resultado;
          
          } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
          return null;
        }
      } 
      
    // function obtener_eps()
    // {
    //     $this->db->select('*');
    //     $this->db->from('eps');
    //     $this->db->order_by('resultado', 'asc');
    //     $result = $this->db->get();
    //     return $result->result();
    // }

    // function eliminarEps($id)
    // {
    //     $result = $this->db->where('ideps', $id);
    //     $result = $this->db->delete('eps');

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // function registrar_eps($datos)
    // {
    //     $datos = array(
    //         'codigo' => $datos['codigo'],
    //         'ideps' => $datos['idEps'],
    //         'eps' => $datos['eps'],
    //         'nomcategorias' => $datos['categoria'],
    //         'nomservicio' => $datos['servicio'],
    //         'nomespecifique' => $datos['especifique'],
    //         'nomindicador' => $datos['indicador'],
    //         'resultado' => $datos['resultado'],
    //         'nomunidad' => $datos['unidad'],
    //         'nomfuente' => $datos['fuente'],
    //         'fecha_corte' => $datos['fuente_corte'],
    //         'linkfuente' => $datos['link'],
    //     );
    //     return $this->db->insert('eps', $datos);
    // }

    // function actualizarEps($datos,$id)
    // {

    //     $datos = array(
    //         'codigo' => $datos['codigo'],
    //         'ideps' => $datos['idEps'],
    //         'eps' => $datos['eps'],
    //         'nomcategorias' => $datos['categoria'],
    //         'nomservicio' => $datos['servicio'],
    //         'nomespecifique' => $datos['especifique'],
    //         'nomindicador' => $datos['indicador'],
    //         'resultado' => $datos['resultado'],
    //         'nomunidad' => $datos['unidad'],
    //         'nomfuente' => $datos['fuente'],
    //         'fecha_corte' => $datos['fuente_corte'],
    //         'linkfuente' => $datos['link'],
    //     );

    //     $result = $this->db->where('id', $id);
    //     $result = $this->db->update('eps', $datos);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
