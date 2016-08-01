<?php

function cleanInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function chargerClasse($classe)
{
    require 'class/' . $classe . '.php';
}

function valider($input, $format)
{
    if ($format == 'pseudo')
    {
        return preg_match("#^[a-z]+$#i", $input);
    }
    
    else if ($format == 'nom')
    {
        return preg_match('#^[a-zéèûùàîïçÛÙÎÏÀÉÈÇ-]{0,}$#i', $input);
    }
}