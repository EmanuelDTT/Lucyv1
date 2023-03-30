<?php 
    namespace App\Controllers;
    use App\Models\ModeloPerso;
    class UsuarioController extends BaseController{
        public function inicio(){
         
            echo view ('usuario/header');
            echo view ('usuario/Menu');
            echo view ('usuario/inicio');
            echo view ('usuario/Footer');
        
        }

        public function formulario(){
            $crud= new ModeloPerso();
            $datos= $crud->obtener();
            $mensaje= session('mensaje');
            $data=[
                 "datos" => $datos,
                 "mensaje"=>$mensaje
            ];

            echo view ('usuario/header');
            echo view ('usuario/Menu');
            echo view ('usuario/formulario', $data);
            echo view ('usuario/Footer');
    
        }
     
        public function Menu(){
            $data= ['titulo' => 'Menu'];
            echo view ('usuario/header');
            echo view ('usuario/Menu');
            echo view ('usuario/inicio', $data);
            echo view ('usuario/Footer');
    
        }

        public function servicios(){
            $data= ['titulo' => 'servicio'];
            echo view ('usuario/header');
            echo view ('usuario/Menu');
            echo view ('usuario/servicios', $data);
            echo view ('usuario/Footer');
    
        }

      public function acerca(){
           
            echo view ('usuario/header');
            echo view ('usuario/Menu');
            echo view ('usuario/acerca');
            echo view ('usuario/Footer');
        }

        
        public function crear (){
          

            $validation=$this->validate(['nombre' => 'required', 'numero'=>'required', 'email'=>'requerd', 'contra'=>'required']);

                if ($_POST && $validation) {
                    # code...
               
                $datos=[
                    "Nombre"=>$_POST['nombre'],
                    "Numero"=>$_POST['numero'],
                    "Email"=>$_POST['email'],
                    "contra" =>$_POST['contra']
                ];
    
                $crud= new ModeloPerso();
    
                $respuesta= $crud->insertar($datos);
    
                if ($respuesta>0) {
                   return redirect()->to(base_url('/formulario'))->with('mensaje', '1');
                }else{
                    return redirect()->to(base_url('/formulario'))->with('mensaje', '0');
                }
            }

        }
        
        }

      
      

       


    


?>