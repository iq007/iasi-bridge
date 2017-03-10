<?php

// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

//make it safe

$q = str_replace("..","",$q);

if ($q !== "") {
  readfile("arhiva/" . $q);
}


?> 