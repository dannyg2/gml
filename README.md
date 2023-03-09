
## Instalacion

1. Tener instalado git , composer , apache , php version  mayor  8, y mysql
2. Ejecutar script con el nombre backup.sql que se encuentra en el repo de github
3. Clonar repositorio con el siguiente link https://github.com/dannyg2/cameron.git
4. Ejecutar el comando composer install
5. modificar los parametros de la bd en el archivo enviroment 
    #DB_CONNECTION=mysql
    #DB_HOST=127.0.0.1
    #DB_PORT=3306
    #DB_DATABASE=laravel
    #DB_USERNAME=root
    #DB_PASSWORD=
6. Ejecutar php artisan serve
7. Abrir en el navegador la siguiente url http://127.0.0.1:8000


## Funcionamiento de la Aplicacion
1. Al entrar en la aplicacion se encontrar con el listado de los hoteles disponibles donde se tendra un boton para agregar habitaciones segun el criterio mencionado en el documento.
2. En la parte superior encontrara un boton para crear un nuevo hotel