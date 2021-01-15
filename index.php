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


/* Array complejo 

*/


$courses = [
'frontend'=>'JavaScript',
'Framework'=>'Laravel',
'backend'=>'PHP'];

echo "<pre>";
var_dump($courses);

foreach ($courses as $key => $value) {
    # code...

    echo "$key :$value <br>";
}

foreach ($courses as $course) {
    # code...

    echo "$course <br>";
}
echo " <br>";
echo " funciones de array <br>";

/* Array funciones dentro del array 

walk - caminar aplicar una funcion a cada miembro de un array 

array_key_exists('valor a buscar',$courses); retorna true o false , busqueda si esxiste ese key en es array.
in_array('valor a buscar',$courses); returna valor boolean , busqueda si existe el valor en el array .
array_keys(); impresion de todos los keys del array definido.
array_values();impresion de todos los valores del array definido.
*/
var_dump(array_key_exists("frontend",$courses));
var_dump( in_array("Laravel",$courses));
var_dump(array_keys($courses));
var_dump(array_values($courses));

/* Funciones PHP para arrays

sort: Ordena un array.
rsort: Ordena un array en orden inverso.
ksort: Ordena un array por clave.
krsort: Ordena un array por clave en orden inverso.
array_slice: Extrae una parte de un array.
array_chunk: Divide un array en fragmentos.
array_shift: Quita un elemento del principio del array.
array_pop: Extrae el último elemento del final del array.
array_unshift: Añadir al inicio de un array uno a más elementos.
array_push: Inserta uno o más elementos al final de un array.
array_flip: Intercambia todas las claves de un array con sus valores asociados.

*/
$courses = ['JavaScript',
'Laravel',
'PHP',
'Vue.js'];


/* Comparacion de Array  

*/

$courses = ['php', 'javascript'];
$wishes = ['php', 'javascript', 'laravel', 'vuejs'];
//Por ejemplo, tengo dos cursos(PHP y JS) pero quisiera saber que otros cursos le gustaría a mis estudiantes
//Con esto comparo los array y descarto los cursos que yo ya tengo.

var_dump(array_diff($wishes, $courses));


echo "<br>";
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));

/* union en array  

*/



$frontent = [
	'javascript'
];

$backend = [
	 'php', 
	 'laravel'
];

echo "<pre>";

//var_dump($frontent + $backend);


echo "<pre>";
var_dump(array_merge($frontent, $backend));

$frontent3 = [
	'a' => 'javascript'
];

$backend3 = [
	'a' => 'php', 
	'b' => 'laravel'
];

echo "<pre>";
var_dump(array_merge_recursive($frontent3, $backend3));
//Esto crea un array "a" donde mete unos elementos y otro "b" que mete los demás
//resultado
/* 
array(2) {
  ["a"]=>
  array(2) {
    [0]=>
    string(10) "javascript"
    [1]=>
    string(3) "php"
  }
  ["b"]=>
  string(7) "laravel"
}
*/

echo "<br>";
//Ejemplo con los mismo key
#array_combine
//Crea un nuevo array, usando una matriz para las claves y otra para sus valores
$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

var_dump(array_combine($categories, $courses));