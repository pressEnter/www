SETUP:

1 - Descargar el código del repositorio
2 - Dar permiso de escritura a los directorios "assets" y "protected/runtime"
3 - Actualizar una extensión (SluggableBehavior) que está agregada como submódulo de GIT (http://git-scm.com/book/en/Git-Tools-Submodules).
    Para hacerlo, ejecutar:
		$ git submodule init
		$ git submodule update
4 - Copiar el archivo "protected/config/db.php-dist" a "protected/config/db.php".
5 - Crear una base de datos y configurarla en el archivo "protected/config/db.php"
6 - Ejecutar en la base de datos el archivo "protected/data/schema.mysql.sql".
7 - Ejecutar en la base de datos los archivos que haya en "protected/data/deltas/".
9 - Cruzar los dedos y visitar el sitio.
