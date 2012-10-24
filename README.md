pressEnter.com.ar
=================

pressEnter es una cooperativa de desarrollo de software de Buenos Aires, Argentina, que utiliza principalmente tecnologías libres.

Este es el código fuente del sitio web actual (http://pressenter.com.ar), desarrollado utilizando YII Framework (http://yiiframework.com) y MySQL como base de datos.

Lo liberamos bajo GPL para fines educativos.

Se utilizó jQuery (http://jquery.com) como librería Javascript y jQueryTools (http://jquerytools.org/) para los efectos.

Íconos: Dryicons (http://dryicons.com), Nicholas Roach (http://www.elegantthemes.com/), Delacro (http://delacro.deviantart.com/), Mysitemyway (http://mysitemyway.com).

Fuente del logo: Amaranth (http://www.google.com/webfonts/specimen/Amaranth).


INSTALACIÓN (Español)
---------------------

1. Descargar el código del repositorio en la carpeta web local
2. Dar permiso de escritura a los directorios "assets" y "protected/runtime"
3. Actualizar una extensión (SluggableBehavior) que está agregada como submódulo de GIT (http://git-scm.com/book/en/Git-Tools-Submodules). Para hacerlo, ejecutar:
		
		$ git submodule init
		$ git submodule update
		
4. Copiar el archivo "protected/config/db.php-dist" a "protected/config/db.php"
5. Crear una base de datos y configurarla en el archivo "protected/config/db.php"
6. Ejecutar en la base de datos el archivo "protected/data/schema.mysql.sql"
7. Ejecutar en la base de datos los archivos que haya en "protected/data/deltas/"
9. Cruzar los dedos y visitar el sitio (por ejemplo http://localhost/pressenter)


Contacto:
---------

Contactáte con nosotros ante cualquier duda, sugerencia, loquesea (salvo SPAM):

Luciano Baraglia <lbaraglia@pressenter.com.ar>

Fernando Toledo <ftoledo@pressenter.com.ar>

Héctor Sánchez <hsanchez@pressenter.com.ar>

Miguel García <mgarcia@pressenter.com.ar>







pressEnter is a software development cooperative based in Buenos Aires, Argentina, that develops with free technologies.

This is the current website (http://pressenter.com.ar) source code, developed with YII Framework (http://yiiframework.com) and MySQL as database.

It is now released under GPL for educative purposes.

We used jQuery (http://jquery.com) as Javascript library and jQueryTools (http://jquerytools.org/) for effects.

Íconos: Dryicons (http://dryicons.com), Nicholas Roach (http://www.elegantthemes.com/), Delacro (http://delacro.deviantart.com/), Mysitemyway (http://mysitemyway.com).

Logo font: Amaranth (http://www.google.com/webfonts/specimen/Amaranth).

INSTALLATION (English)
---------------------

1. Download code from repository into local web folder
2. Make "assets" and "protected/runtime" directories writables
3. Update extension (SluggableBehavior) that is added as a GIT submodule (http://git-scm.com/book/en/Git-Tools-Submodules). In order to do this, execute:
		
		$ git submodule init
		$ git submodule update
		
4. Copy "protected/config/db.php-dist" to "protected/config/db.php"
5. Create a database and configure it in "protected/config/db.php" file
6. Execute SQL files in the database "protected/data/schema.mysql.sql"
7. Execute SQL files located in "protected/data/deltas/"
9. Cross your fingers and visit the local site (e.g. http://localhost/pressenter)


Contact:
--------

Contact us for any doubt, suggestion, whatever (no SPAM):

Luciano Baraglia <lbaraglia@pressenter.com.ar>

Fernando Toledo <ftoledo@pressenter.com.ar>

Héctor Sánchez <hsanchez@pressenter.com.ar>

Miguel García <mgarcia@pressenter.com.ar>


