# pressEnter.com.ar


  
## ESPAÑOL

pressEnter es una cooperativa de desarrollo de software de Buenos Aires, Argentina, que utiliza principalmente tecnologías libres.  
Este es el código fuente del sitio web actual (<http://pressenter.com.ar>), desarrollado utilizando YII Framework (<http://yiiframework.com>) y MySQL como base de datos.  
Lo liberamos bajo GPL para fines educativos.  
Se utilizó jQuery (<http://jquery.com>) como librería Javascript y jQueryTools (<http://jquerytools.org/>) para los efectos.  
Íconos: Dryicons (<http://dryicons.com>), Nicholas Roach (<http://www.elegantthemes.com/>), Delacro (<http://delacro.deviantart.com/>), Mysitemyway (<http://mysitemyway.com>).  
Fuente del logo: Amaranth (<http://www.google.com/webfonts/specimen/Amaranth>).  


### SETUP

1. Clonar el proyecto o descargar el código del repositorio en la carpeta web local
2. Dar permiso de escritura a los directorios **assets** y **protected/runtime**
3. Actualizar una extensión (SluggableBehavior) que está agregada como submódulo de GIT (<http://git-scm.com/book/en/Git-Tools-Submodules>) (\*).
4. Copiar el archivo **protected/config/db.php-dist** a **protected/config/db.php**
5. Copiar el archivo **protected/config/gii.php-dist** a **protected/config/gii.php**
6. Copiar el archivo **htaccess-dist** a **.htaccess**
7. Crear una base de datos y configurarla en el archivo **protected/config/db.php**
8. Ejecutar en la base de datos el archivo **protected/data/schema.mysql.sql**
9. Ejecutar en la base de datos los archivos que haya en **protected/data/deltas/**
10. Cruzar los dedos y visitar el sitio (por ejemplo <http://localhost/pressenter>)
11. Para administrar las noticias hay que ir al módulo **admin** (por ejemplo <http://localhost/pressenter/admin>) y loguearse con los datos de la base (admin/admin por defecto)

(\*) Para hacerlo, ejecutar:

		$ git submodule init
		$ git submodule update
Los usuarios que no usen GIT deberían descargar directamente el módulo <https://github.com/mintao/yii-behavior-sluggable> y guardarlo en la carpeta correspondiente: **protected/extensions/behaviors/SluggableBehavior**

### CONTACTO:

Contactáte con nosotros ante cualquier duda, sugerencia, loquesea (salvo SPAM):

Luciano Baraglia <lbaraglia@pressenter.com.ar>  
Fernando Toledo <ftoledo@pressenter.com.ar>  
Héctor Sánchez <hsanchez@pressenter.com.ar>  
Miguel García <mgarcia@pressenter.com.ar>  


---------------------------------------

  
# ENGLISH
  
pressEnter is a software development cooperative based in Buenos Aires, Argentina, that develops with free technologies.  
This is the current website (<http://pressenter.com.ar>) source code, developed with YII Framework (<http://yiiframework.com>) and MySQL as database.  
It is now released under GPL for educative purposes.  
We used jQuery (<http://jquery.com>) as Javascript library and jQueryTools (<http://jquerytools.org/>) for effects.  
Icons: Dryicons (<http://dryicons.com>), Nicholas Roach (<http://www.elegantthemes.com/>), Delacro (<http://delacro.deviantart.com/>), Mysitemyway (<http://mysitemyway.com>).  
Logo font: Amaranth (<http://www.google.com/webfonts/specimen/Amaranth>).  
  

## SETUP

1. Clone the project or download the code from the repository into the local web folder
2. Make **assets** and **protected/runtime" directories writables
3. Update extension (SluggableBehavior) that is added as a GIT submodule (<http://git-scm.com/book/en/Git-Tools-Submodules>) (\*). 
4. Copy **protected/config/db.php-dist** to **protected/config/db.php**
5. Copy **protected/config/gii.php-dist** to **protected/config/gii.php**
6. Copy **htaccess-dist** to **.htaccess**
7. Create a database and configure it in **protected/config/db.php** file
8. Execute SQL files in the database **protected/data/schema.mysql.sql**
9. Execute SQL files located in **protected/data/deltas/**
10. Cross your fingers and visit the local site (e.g. <http://localhost/pressenter>)
11. To admin the news go to **admin** module (e.g. <http://localhost/pressenter/admin>) and login with the provided data (admin/admin by default)

(\*) In order to do this, execute:

		$ git submodule init
		$ git submodule update
Users that doesn't use GIT should download the module <https://github.com/mintao/yii-behavior-sluggable> and save it to the right folder: **protected/extensions/behaviors/SluggableBehavior**


### CONTACT:

Contact us for any doubt, suggestion, whatever (no SPAM):

Luciano Baraglia <lbaraglia@pressenter.com.ar>  
Fernando Toledo <ftoledo@pressenter.com.ar>  
Héctor Sánchez <hsanchez@pressenter.com.ar>  
Miguel García <mgarcia@pressenter.com.ar>  
