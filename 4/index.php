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

}

$foo1 = new Foo;
$foo1 -> numero = "12";
print_r($foo1); //Foo Object ( [propiedad:Foo:private] => Padre [numero] => 12 ) 


$foo2 = new Foo;
print_r($foo2); //Foo Object ( [propiedad:Foo:private] => Padre )

//De esta forma queda demostrado que al añadirle la propiedad numero al primer objeto , esta
//simplemente se le agrega al objeto y NO a la clase o demás objetos

?>
    
</body>
</html>