<?php

/**
 * 
 * Alterar Datos de Variables Ejemplo
 *  fundir datos en miniscula strtolower
 *  fundir datos en mayuscula strtoupper
 *  fundir la primera letra de  en mayuscula ucfirst
 *  fundir la primera letra de  en miniscula lcfirst
 */

 $text = "<h1> PHP es UN LENGUAJE , año 2020 , programación</h1> ";
 echo strtolower($text) ."<br>";
 echo strtoupper($text)."<br>";
 echo ucfirst($text)."<br>";
 echo lcfirst($text)."<br>";



 /**
  * 
  *Reemplazar
  *
  *
  */

  $slug = str_replace(' ','-',$text);
  echo $slug . "<br>";
  echo strtolower($slug)."<br>";


  /**
  * 
  *modificacion
  *  agregar caracteres para cumplir con el tamaño ejemplo   str_pad
  *  retirar etiquetas en las variables   ejemplo strip_tags
  */

  $code = 39 ;
  echo str_pad($code,5,'#',STR_PAD_LEFT) ;

  echo strip_tags($text);


 /**
  * 
  *elementos monobytes y multibyte
  *  
  *
  */
  echo strtoupper($text);  //monbyte
  echo mb_strtoupper($text);  //multibytes  los carateres como ñ ó á agregar mb_
