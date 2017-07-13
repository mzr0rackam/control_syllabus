## Instalar admin lte
https://styde.net/como-integrar-plantilla-adminlte-en-laravel/
https://www.uno-de-piera.com/instalar-y-configurar-adminlte-en-laravel-5/
https://github.com/acacha/adminlte-laravel


## Roles y permisos
https://github.com/Zizaco/entrust
https://github.com/acoustep/entrust-gui
https://www.uno-de-piera.com/roles-laravel-5-entrust/


## 1.Instalar laravel 5.4.*
laravel new app_name
php artisan app:name App_Name

## 2.Instalar Admin LTE
cd app_name
composer require "acacha/admin-lte-template-laravel:4.*"
To register the Service Provider edit config/app.php file and add to providers array:

/*
 * Acacha AdminLTE template provider
 */
Acacha\AdminLTETemplateLaravel\Providers\AdminLTETemplateServiceProvider::class,

To Register Alias edit config/app.php file and add to alias array:

/*
 * Acacha AdminLTE template alias
 */
'AdminLTE' => Acacha\AdminLTETemplateLaravel\Facades\AdminLTE::class,

Publish files with:

php artisan vendor:publish --tag=adminlte --force

Crear a database.
Colocar el nombre de la bd en en archivo .env

**Para versión Laravel 5.4
on file AppServiceProvider.php
use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}

Correr el comando:
php artisan migrate

Para verificar
Registrarse

php artisan serve

## 3. Instalar Entrust (roles y permisos)
Ir a composer.json y agregar la dependencia:
"zizaco/entrust": "5.2.x-dev",
Correr el comando
composer update

En el archivo config/app.php
providers
/*
 * Entrust provider
 */
Zizaco\Entrust\EntrustServiceProvider::class, 

aliases
/*
 * Entrust Alias
 */
'Entrust'   => Zizaco\Entrust\EntrustFacade::class,


correr comando
php artisan vendor:publish

Abrir config/auth.php y agregar la configuración siguiente

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => Namespace\Of\Your\User\Model\User::class,
        'table' => 'users',
    ],
],


Luego en app/Http/Kernel.php dentro del arreglo $routeMiddleware agregar
    'role' => \Zizaco\Entrust\Middleware\EntrustRole::class,
    'permission' => \Zizaco\Entrust\Middleware\EntrustPermission::class,
    'ability' => \Zizaco\Entrust\Middleware\EntrustAbility::class,


Generar una migración para roles y permisos
php artisan entrust:migration

Esto generará tabla de migraciones
Ahora ejecutar comando de migración

php artisan migrate


Configurar User, Role y Permission Models agregando

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole

  protected $fillable = [
    'name',
    'display_name',
    'description'
  ];

  y la relación
  belongsToMany

Ejecutar el comando
composer dump-autoload
