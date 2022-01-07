Entrevista de Trabajo Ing. Angel Alberto Gómez Tapia.


Se realizo la instalacion de Laravel y Composer.

Posterior a esto se creo el repositorio de GIT.

Se creo la base de Datos de MySQL, usuario "root" contraseña "" Nombre "digitalifeang".

Fin de la Tarea 1.

Procedo a enfocarme a la Base de datos, para poder iniciar con el punto.



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

Extenciones VSC:
    ->PHP Intelephense
    ->Laravel Snippets