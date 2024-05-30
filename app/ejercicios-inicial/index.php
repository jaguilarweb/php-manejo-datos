<?php

//Uso de comilla simple
echo 'Un texto de linea
varias lineas  
comilla simple \'
backslash \\
$variable <br>
';

//Uso comilla simple con concatenación
$name = 'Jenny';
echo 'Mi nombre es ' . $name . ' => Comilla simple: Concatenación <br>';

//Uso de commilla doble
$name = 'Jenny';
echo "Mi nombre es $name => Comilla doble <br> " ;


$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

//La siguiente estructura es erronea
//echo "$courses['backend'][0]";

/* La siguiente estructura es correcta, ya que cuando
la estructura de dato es más compleja (de más de un nivel)
 se debe de usar llaves*/ 
echo "{$courses['backend'][0]} => Estructura dato compleja usa parentesis de llave <br>";


//Objetos

class User
{
    public $name = 'Jenny';
    //Si se requiere una propiedad más compleja
    public $carrera = [
        'ingenieria' => [
            'Desarrollador Backend',
            'Desarrollador Frontend'
        ],
        'técnico'
    ];
}
$user = new User();

echo "$user->name quiere aprender {$courses['backend'][0]} <br>";

//Si estuviera trabajando con una cadena de metodos más larga
//se requiere los parentesis de llave. Ejemplo

echo "$user->name quiere aprender {$courses['backend'][0]}, para mejorar su carrera de {$user->carrera['ingenieria'][0]} <br>";

//Variable de variables

$intereses = [
  'backend' => 'PHP'
];

//echo "$user->name quiere aprender $intereses['backend']";

$teacher = 'Jenny';
$Jenny = 'Profesora de matemáticas';

echo "$teacher es ${$teacher} <br>";

function getTeacher(){
  return 'teacher';
}


echo "{${getTeacher()}} enseña PHP";