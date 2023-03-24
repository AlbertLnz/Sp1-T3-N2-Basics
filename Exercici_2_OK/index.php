<?php

  // STRING
  // ?????

  //ARRAY'S
  $string=("hola"); //aolh
  echo ("Entrada: ".$string);

  $count = strlen($string);
  $array = str_split($string);
  $initial_element = $array[0];
  $last_element = $array[($count)-1];
  array_shift($array);
  array_pop($array);
  array_unshift($array, $last_element);
  array_push($array, $initial_element);
  //Seguro que hay una forma de hacerlo más compacto, pero ahora no me viene :'(

  echo("\nSortida: ");
  foreach($array as $value){
    print_r($value);
  }

  
  
?>