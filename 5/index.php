<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Foo {

    private $propiedad = 'Padre';
   
    public function __get($variable) {
        return $this->propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }
}


class Fee extends Foo{
   
    public $variable = 'Hija';

}

$foo = new Foo;
echo($foo-> __get("variable")); //Padre
$fee = new Fee;
echo($fee->__get("variable")); //Padre 
echo $fee->variable; //Hija

    // Los metodos mágicos __set() y __get() nos permiten settear y acceder a valores de aquellas propiedades innaccesibles como en el ejemplo,
    // que se trata de una propiedad privada. Al definirilas en el padre, desde la instancia del objeto "hijo", al llamar a la función 
    // __get() accede a la del padre y por lo tanto devuelve el valor "Padre";
    // Es accesible a las propiedades privadas (o protegida) del padre  gracias a los métodos mágicos  __get() 
    // se podría acceder al valor y podría settearse con __set()
?>
    
</body>
</html>