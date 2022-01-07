Entrevista de Trabajo Ing. Angel Alberto Gómez Tapia.


Se realizo la instalacion de Laravel y Composer.

Posterior a esto se creo el repositorio de GIT.

Se creo la base de Datos de MySQL, usuario "root" contraseña "" Nombre "digitalifeang".

Se requiere Migrar la Base de Datos:
    php artisan migrate
    php artisan db:seed

Con esto ya vamos a poder ingresar a la URL public/ de nuestro proyecto.

Iniciando el Login se usuan las credenciales, Correo "admin@digitalife.com.mx" y contraseña "digitalife"




Documentación de Registro programador.

Lineas de Codigo para DB:
    //Con esto se crea el docuemnto para registro dela base de datos de Rpoductos y las imagnes de productos.
    ->php artisan make:migration create_products_table
        $table->id();
        $table->string('name',25);
        $table->double('price', 8, 2);
        $table->integer('qty');
        $table->timestamps();
        $table->softDeletesTz($column = 'deleted_at', $precision = 0);

    ->php artisan make:migration create_products_images_table
        $table->id();
        $table->integer('product_id');
        $table->text('original_url');
        $table->text('url');
        $table->timestamps();
        $table->softDeletesTz($column = 'deleted_at', $precision = 0);

    ->Se uso la Estructura de Usuarios por lo cual no se creo.
        $table->id();
        $table->string('email')->unique();
        $table->string('password');
        $table->timestamps();


Seeder
    Se creo el primer Registro, con el usuario y contraseña marcado en el documento.
    Como practica quiero agregar variso productos, esto tambien ayuda a poder hacer pruebas con las tablas mas adelante.

Extenciones VSC:
    ->PHP Intelephense
    ->Laravel Snippets