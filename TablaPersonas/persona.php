<?php 
class persona{
    private $nombre;
    private $FecNac;
    private $tel;
    private $edad;

    public function __construct($nombre, $FecNac, $tel){
        $this->nombre = $nombre;
        $this->FecNac = $FecNac;
        $this->tel = $tel;
    }
 
public function getNombre (){
    return $this -> nombre;
}

public function setNombre ($value) {
    $this -> nombre = $value;
}

public function getFecNac () {
    return $this -> FecNac;
}

public function setFecNac ($value) {
    $this -> FecNac = $value;
}

public function getEdad()
{
    $FecNac = new DateTime($this->FecNac);
    $hoy = new DateTime("now");
    $edad = $hoy->diff($FecNac);
    return $edad->y; // Retorna solo los años
}

public function getTel () {
    return $this -> tel;
}

public function setTel ($value) {
    $this -> tel = $value;
}
}

//cierre de php no se incluye por que el scrip debe ser incluido en otro