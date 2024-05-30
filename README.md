# Curso Manejo de Datos de PHP

Este proyecto corresponde a notas del Curso de Manejo de Datos de PHP impartido por Platzi.

También utilicé este proyecto para seguir practicando configuraciones de Docker, para utilizar contenedores como ambientes de desarrollo.


**En este curso no utilizamos base de datos**

Para instalar PHPUnit, considerar que tenemos la versión de php 8.1, por tanto, la versión compatible de phpunit es:
  
  ```bash
  composer require --dev phpunit/phpunit ^10
  ```

  Cuando hago cambios en la configuración del archivo composer.json, para dar de alta la nueva configuración que es el autoload debo usar el siguiente comando:

  ```bash
  composer dump
  ```

Ojo, que el comando para la instalación de PHPUnit y los siguientes comandos para dar de alta la configuración de autoload debe ser en el archivo raiz. En el caso de este proyecto, estoy el archivo raiz es app que en el servidor es var/www/html. Por tanto, los comandos anteriores los estoy corriendo dentro del contenedor.

Luego creo el archivo de phpunit.xml.

Para ejecutar las pruebas se usa el siguiente comando:

```bash
vendor/phpunit/phpunit/phpunit
```

