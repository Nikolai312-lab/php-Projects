<?php
function printHelloWorld($arg1 , $arg2){
  $str= "<$arg1 style = 'color:" . $arg2 . "'>";
  $str.= "This is sime random text from a php code";
  $str.= "</$arg1>";

  return $str;
}
echo printHelloWorld('h1', 'blue');
echo printHelloWorld('h2', 'red');
echo printHelloWorld('h3', 'violet');
echo printHelloWorld('h4', 'purple');
echo printHelloWorld('h5', 'cyan');
echo printHelloWorld('h6', 'lightgreen');
