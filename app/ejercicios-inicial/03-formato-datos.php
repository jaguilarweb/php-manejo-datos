<?php

/** Alterar */
$text = "PHP es UN LENGUAJE";
echo strtoupper($text)."<br>"; // Convierte a mayúsculas
echo strtolower($text)."<br>"; // Convierte a minúsculas
echo ucfirst(strtolower($text))."<br>"; // Convierte a mayúsculas la primera letra de la cadena
echo lcfirst(strtoupper($text))."<br>"; // Convierte a minúsculas la primera letra de la cadena


/** Remplazar */
$slug = str_replace(' ', '-', $text);
echo strtolower($slug)."<br>";

/** Modificación */
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_BOTH)."<br>"; // Rellenar un string con otro string
$text_html = "<h1>texto html</h1>";
echo strip_tags($text_html)."<br>"; // Elimina las etiquetas HTML

$texto_caracteres = "Este es el año de la Programación";
echo mb_strtoupper($texto_caracteres); //Multibaytes

