<?php

/**
 * 
 * Expresiones Regulares
 * se componen de    / : contenedor  ^ : inicio  $ :final   - : rangos
 * 
 * 
 * 
 * 
 */

 $password = '123456';

 var_dump( (bool)preg_match('/^[0-9]{6,9}$/',$password));