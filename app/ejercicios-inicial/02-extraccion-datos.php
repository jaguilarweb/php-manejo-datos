<?php

$data = 'Estudio PHP';
echo $data[0]."<br>";

$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quos voluptates accusantium cumque dolor quia, ea repudiandae rem soluta quasi iusto tenetur porro nostrum, blanditiis tempora consectetur? At, obcaecati animi?";

$extract = substr($post, 0, 25);

echo "$extract... [ver más]"."<br>";

//Pasar una string a array
$data = 'javascript, php, laravel'; // campo tags
$tags = explode(', ', $data);

echo "<pre>";
var_dump($tags);
echo "</pre>";

//Pasar un array a string
$courses = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses);


//Ejemplo
$course = "   Curso de PHP   ";
$course1 = "   Curso de PHP   ";
$course2 = "   Curso de PHP   ";
$course = ltrim($course);//Elimina los espacios a la izquierda (left)
echo "<pre>";
echo "Quiero aprender $course y otro texto";
$course = rtrim($course2);//Elimina los espacios a la derecha (right)
echo "<pre>";
echo "Quiero aprender $course y otro texto";
$course = trim($course1);//Elimina los espacios iniciales y finales)
echo "<pre>";
echo "Quiero aprender $course y otro texto";