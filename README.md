<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

######

1.- inicio instalar laravel
2.- instalar compouser require livewire/livewire
3.- Conectar la base de datos
4.- maquetacion (instalacion de la base para el proyecto)
5.- crear el layouts
6.- crea la base
7.- crear componente php artisan make:livewire HomeComponent
8.- instalar los componentes de las distintas vistas
9.- crear enlaces a los componentes
10.- instalacion composer require laravel/Jetstream
11.- instalacion php artisan jetstream:install livewire
12.- configuracion del usuario en la base de datos
13.- migracion
14.- installar npm instal como dependencia
15.- creacion de middleware de Admin php artisan make:middleware AuthAdmin video 3 14:03
16.- configuracion del middleware
17.- configuracion del vendor
vendor laravel fortify src Action AttemptToAuthenticate
18.- crear archivo de User y Admin
19.- configuracion de las vistas
20.- creacion de las tablas de Category y product
21.- creacion de lo seed
22.- Libreria externa select.org https://select2.org/getting-started/installation
para darle mejor vista a los selectores
23.- Usamos libreria de botstrap para fecha y hora https://cdnjs.com/libraries/bootstrap-datetimepicker
24.- usamos otras libreria para el formato de fecha https://cdnjs.com/libraries/moment.js
25.- usamos esta libreria para una barra deslisable https://cdnjs.com/libraries/noUiSlider en Shop
26.- usamos esta libreria para agregar estilos a los textarea https://www.tiny.cloud/my-account/dashboard/ en product
27.- no aparese la carpeta cart por que no se a publicado shop global usar este comando
php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="config"
28.- agregamos libreria "cartalyst/stripe-laravel": "^13.0" en composer.json (composer update)
dale de alta en config app pagina de descarga https://cartalyst.com/manual/stripe-laravel/13.x
pendirnte de cargar en config app las dependencias. esta en la pagina
cuando hacemos el update se pierde el archivo que esta en vendor lo coloco adjunto en la parte inferior
29.- de alta en un motor de pago como venemex #vene https://dashboard.stripe.com/test/dashboard copiamos
la api key y la colocamos en .env comercio en linea

Archico que se borra
en vendor laravel/fortify/src/Actions/AttemptToAuthenticate.php
public function handle($request, $next)
{
if (Fortify::$authenticateUsingCallback) {
            return $this->handleUsingCustomCallback($request, $next);
}

        if ($this->guard->attempt(
            $request->only(Fortify::username(), 'password'),
            $request->filled('remember'))
        ) {
            if(Auth::user()->utype === 'ADM')
            {
                session(['utype' => 'ADM']);
                return redirect(RouteServiceProvider::HOME);
            }
            else if(Auth::user()->utype === 'USR')
            {
                session(['utype' => 'USR']);
                return redirect(RouteServiceProvider::HOME);
            }
            return $next($request);
        }

        $this->throwFailedAuthenticationException($request);
    }

    correccion para que no se bore al hacer update
    esto esta en la ruta Middleware\AuthAdmin.php
    recorar colocar el Auth
    use Illuminate\Support\Facades\Auth;

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->utype === 'ADM' )
        {
            return $next($request);
        }
        else
        {
            session()->flush();
            return redirect()->route('login');
        }
        return $next($request);
    }

Archivo .env

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:TQrnLIaHckC1tc0xGV/b+TPDkqB2eTOm/dsQAW9F6co=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=database
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="\${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

STRIPE_kEY=
