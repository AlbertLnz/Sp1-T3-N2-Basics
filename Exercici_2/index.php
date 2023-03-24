<?php

  //THROUGH STRING
  $string=("albert");
  echo ("Entrada: ".$string);
 
  $count=strlen($string)+1; //7
  $string=$string.$string;

  echo ("\nSortida: ");
  $string = substr($string,0,$count); //substr(string, start, length) == alberta
  $string = ltrim($string, $string[0]); //ltrim(string, position) == lberta
  echo $string;



  //THROUGH ARRAY'S
  $string2=("albert");
  echo ("\n\nEntrada: ".$string2);

  $array = str_split($string2); //string to array == ("a","l","b","e","r","t")
  array_push($array,$array[0]); //add element [0] to end == ("a","l","b","e","r","t","a")
  array_shift($array); //delete 1st element of an array == ("l","b","e","r","t","a")

  echo("\nSortida: ");
  foreach($array as $value){
    print_r($value);
  }

?>