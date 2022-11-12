<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Sitio_model");
	}
	public function index()
	{
		$this->load->view("sitio/cabecera");
		$this->load->view("sitio/header");
		$this->load->view("sitio/contenido");
		$this->load->view("sitio/piepagina");
	}
	public function ListarEps(){

		$eps = $this->Sitio_model->listar(); 

		$this->load->view("sitio/cabecera");
		$this->load->view("sitio/header");
		$this->load->view("sitio/listEps", compact("eps"));
		$this->load->view("sitio/piepagina");
	}

	public function RegistarEps()
	{
		$codigo =$this->input->post("codigo");
        $idEps =$this->input->post("idEps");
		$eps =$this->input->post("eps");
        $categoria =$this->input->post("categoria");
		$especifique =$this->input->post("especifique");
        $Indicador =$this->input->post("Indicador");
		$unidad =$this->input->post("unidad");
        $fuente =$this->input->post("fuente");
		$fuentecorte =$this->input->post("fuentecorte");
        $linkfuente =$this->input->post("linkfuente");

		$datos = array(                
			"codigo"  =>  $codigo,
			"idEps"  =>  $idEps,
			"eps"  =>  $eps,
			"categoria"  =>  $categoria,
			"especifique"  =>  $especifique,
			"Indicador"  =>  $Indicador,
			"unidad"  =>  $unidad,
			"fuente"  =>  $fuente,
			"fuentecorte"  =>  $fuentecorte,
			"linkfuente"  =>  $linkfuente,
		);
	
		$respuesta = $this->Sitio_model->Validar($codigo);  

		if($respuesta)
        {
            echo '<script>
               alert("Ya existe un registro con este codigo");
              </script>';
              echo '<script>window.location.href="http://localhost/Salud/Listar_Eps"</script>';
        }
        else{

        
            $resultmongo= $this->Sitio_model->insertar($datos);

            if( $resultmongo ==false)
			{
				echo '<script>
				      alert("Error, no se pudo agregar la Eps");
					 window.location.href="http://localhost/Salud/Registrar_Eps"; 

				</script> ';
                            
			}else{ 
				echo '<script>
				      alert("la Eps se agrego correctamente");
					 window.location.href="http://localhost/Salud/Listar_Eps"; 

				</script> ';
			};
        }
		

		if (
			empty($this->input->post("codigo")) || empty($this->input->post("eps")) || empty($_POST["categoria"]) || empty($this->input->post("unidad"))
			|| empty($this->input->post("fuente_corte"))
		) {
			if (isset($btn)) {
				echo 'Campos obligatorias vacios';
			}
		} else {

			$this->Sitio_model->registrar_eps($this->input->post());
			redirect(base_url() . 'Listar_Eps');
		}
	}
	public function Register(){
		
		$this->load->view("sitio/cabecera");
		$this->load->view("sitio/header");
		$this->load->view("sitio/Registrar");
		$this->load->view("sitio/piepagina");
	}

	
	function eliminarEps($id)
	{
		$this->Sitio_model->eliminarEps($id);
		redirect(base_url() . 'Listar_Eps');
	}
	
	function actualizarEps($id)
	{

		if (
			empty($this->input->post("codigo")) || empty($this->input->post("eps")) || empty($_POST["categoria"]) || empty($this->input->post("unidad"))
			|| empty($this->input->post("fuente_corte"))
		) {
			echo 'Campos obligatorias vacios';
		} else {

			if ($this->Sitio_model->actualizarEps($this->input->post(), $id)) {
				redirect(base_url() . 'Listar_Eps');
			} else {
				echo 'Ocurrio un error ';
			}
		}
	}
}
