<?php
#creacion de la clase clientepo
class ClientePO {
    #creacion de campos
    private $nombre;
    private $apellidos;
    private $edad;
    


      public function GetNombre(){
            return $this->nombre;
        }

        public function SetNombre($nombre){
            $this->nombre=$nombre;
        }




}

?>