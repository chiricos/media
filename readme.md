# PRUEBA PARA CELMEDIA

para instalar la aplicacion web de laravel primero hay que clonar el repositorio

### git clone https://github.com/chiricos/media

luego hay que instalar con composer sus dependencias

### composer install

luego hay que configurar la base de datos en el archivo .env.example y cambiar el nombre por .env

luego hay que ejecutar en la terminal

### php artisan key:generate

y para crear las tablas de la aplicacion hay que ejecutar en la terminal

### php artisan migrate


La prueba esta realizada en laravel



# ESTRUCTURA

Todo esta de acuerdo a la estructura de laravel excepto una carpeta nueva que agregue
para tener mejor organizado mi proyecto, esto lo hago para tener un modelo de negocio
mas claro al realizar proyectos.

la carpeta esta en App\Media

donde tengo dos carpetas una llamda Entities y otra Repositories

En Entities: dejo todos los modelos que utilizo para que esten mas organizados y no afuera como esta predeterminado

En Repositories: Aquí dejo todos los archivos donde se hace programacion, operaciones y demas con el fin de no
sobrecargar los controller ya que ellos no estan para realizar nuestros calculos sino para controlar los datos