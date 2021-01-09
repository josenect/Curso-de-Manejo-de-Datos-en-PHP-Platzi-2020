    <?php

                // 1. Capitulo Comillas 

/**
 *    carateres a rescatar  (',\)
 *    ' no se conoce la ' que cierra la impresion  solucion \ antes de la '
 * 
 *    \ por que espera un caracter especial solucion agregar \  final queda \\ 
 * 
 * ejemplo
 * 
 */

   echo 'Un texto de una linea  \' varias lineas   \\ Continuo imprimiendo texto <br>';

/*
 *  Comillas simples 
 * se debe concatenar con . para realizar la impresion de variables esto hace que el codigo sea mas extenso y sucio.
 * 
 *  */

$nombre = 'Jose Rodriguez';

echo 'Mi Nombre es ' . $nombre . ' Final <br>';

/*
 * comillas dobles -- 
 * con este tipo de impresion de " " no se debe de utilizar . para realizar la concatenacion de las variables
*/

$apellido = 'Rodriguez Bonilla';

echo "Mi Apellido es  $apellido  Final <br>";


/*
 * 
 * 
 * impresion de datos complejos se acompañan de {}
 * 
 */
$courses = [

    'backend' => ['PHP','Laravel']
];

echo "{$courses['backend'][0]} <br>";

/*
 * 
 * 
 * analisis de variables variables
 * 
 */

$alumno ='jose';
$jose = 'Estudiante de PHP';

echo "$alumno es ${$alumno} <br>";



/*Argumentos 

manejo de valores 
*/
function greet($name)
{
    return "hola ,$name <br>" ;
}


echo greet("Italo");


/*Argumentos 

manejo de referencias  &
*/
$course ="PHP";
function path(&$course)
{
    $course ="Laravel ";
    echo $course , "<br>";

}
path($course);
echo $course , "<br>";


/*Argumentos 

manejo como predeterminado
*/

function saludo($name="jose")
{
    return "Hola $name <br> ";
}

echo saludo();
echo saludo("daniel");


/* Return

*/
function retur()
{
    return ["PDF" , "vista/inicio"];
}


var_dump(retur() ,"<br>" ) ;


/* Closure
funciones anonimas variables que necesitan logica

*/

function Saludoo(closure $lang , $name)
{
    return $lang($name);
}
$en =function($name)
{ 
    return "Hello , $name ";
};

$es =function($name)
{ 
    return "Hola , $name";
};

echo Saludoo($es,'Jose');

/* Array simple

*/

$courses = ['JavaScript',
'Laravel',
'PHP',
'Vue.js'];

echo "<pre>";
var_dump($courses);