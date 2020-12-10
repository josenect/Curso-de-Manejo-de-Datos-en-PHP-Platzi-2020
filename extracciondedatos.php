<?php
/**
 * 
 * Extracion de Datos desde una variable ejemplo
 */

$data = 'estudio PHP' ;
 echo "$data[0] <br>" ;


 $post = 'pos ipsum dolor sit ammet consectetur adipisicing' ;
 $extract = substr($post,0,20);

 echo "$extract.... [ver mas] <br>";

/**
 * 
 * Extracion de Datos desde varaible aun array  ejemplo
 */

 $data2 = 'javascript , php, laravel';
 $tags = explode(',',$data2);


echo "<pre>";

 var_dump($tags);


 /**
 * 
 * Extracion de Datos desde array auna variable ejemplo
 */

 $data3 = ['javascrip' , 'php','laravel'];
 echo implode(', ',$data3) ."<br>";


/**
 * 
 *limpieza de Datos retiro de espacios en la svariables
 *(trim) retiro al inicio y final 
 *(ltrim) se retira los espacios en la izquierda
 *(rtrim)  se retira los espacios de la derecha
 */

 $data4 = "    Cursos de PHP    " ;
 $data4 = trim($data4);
 echo "<pre>";
 echo "quiero aprender $data4 , y " ;
