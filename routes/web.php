<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Catalogos\CategoriasController;
use App\Http\Controllers\Catalogos\MaterialesController;
use App\Http\Controllers\Catalogos\MonedasController;
use App\Http\Controllers\Catalogos\TasasController;
use App\Http\Controllers\Cliente\CanjeController;
use App\Http\Controllers\Export\UserExportController;
use App\Http\Controllers\Facultades\AreasController;
use App\Http\Controllers\Facultades\CarrerasController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\Promociones\CanjearController;
use App\Http\Controllers\Promociones\PromocionesController;
use App\Http\Controllers\Reciclaje\AcopiosController;
use App\Http\Controllers\Reciclaje\EntregasController;
use App\Http\Controllers\Reciclaje\InventariosController;
use App\Http\Controllers\Reciclaje\RecicladorasController;
use App\Http\Controllers\Reciclaje\MaterialController;
use App\Http\Controllers\TwitterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PrivilegiosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Cliente\ResiduosController;
use App\Http\Controllers\Cliente\PromocionesClienteController;
use App\Http\Controllers\Cliente\EstablecimientosController;
use App\Http\Controllers\Landingpage\LandingpageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Gestion del sitio web
Route::get('/', [LandingpageController::class, 'index'])->name('inicio');
Route::get('/landingpage_legacy', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/acerca', [PageController::class, 'acerca'])->name('acerca');
Route::get('/educacion-ambiental', [PageController::class, 'educacion'])->name('educacion-ambiental');
Route::get('/materiales-aceptamos', [PageController::class, 'materiales'])->name('materiales-aceptamos');
Route::get('/centros-acopios', [PageController::class, 'acopios'])->name('centros-acopios');
Route::get('/recepcion-materiales', [PageController::class, 'recepcion'])->name('recepcion-material');
Route::get('/recepcion-materia/{centroAcopio}', [PageController::class, 'recepcionMaterial'])->name('recepcion-materia')->middleware('auth');
Route::get('/entrega', [PageController::class, 'entrega'])->name('entrega')->middleware('auth');
Route::post('/realizar', [PageController::class, 'registrarEntrega'])->name('realizar')->middleware('auth');
Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');
Route::get('/canjes', [PageController::class, 'canjes'])->name('canjes');
Route::get('/puntos', [PageController::class, 'puntos'])->name('puntos')->middleware('auth');
Route::post('/actualizarperfil', [PageController::class, 'actualizarperfil'])->name('actualizarperfil');
Route::post('/canjear', [PageController::class, 'canjear'])->name('canjear')->middleware('auth');


//Inicio de session
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/registro', [LoginController::class, 'registro'])->name('registro');
Route::post('/auth/register', [LoginController::class, 'register'])->name('auth.register')->middleware('guest');
Route::get('/email/verify/{id}/{hash}', [LoginController::class, 'verify'])->name('verification.verify')->middleware('signed');
Route::post('/auth/password/reset', [LoginController::class, 'sendResetLinkEmail'])->name('auth.password.reset');
Route::get('/password/reset/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');
Route::post('/auth/password/reset/process', [LoginController::class, 'resetPassword'])->name('auth.password.reset.process');
Route::post('/validarLogin', [LoginController::class, 'validarLogin'])->name('validarLogin');

//Inicio con Google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

//Inicio con Twitter
Route::controller(TwitterController::class)->group(function () {
    Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
    Route::get('auth/twitter/callback', 'handleTwitterCallback')->name('auth.twitter.callback');
});

//Inicio con Github
Route::controller(GithubController::class)->group(function () {
    Route::get('auth/github', 'redirect')->name('auth.github');
    Route::get('auth/github/callback', 'callback')->name('auth.github.callback');
});




Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/error403', [LoginController::class, 'error403'])->name('error403');
Route::get('/inicio', [PageController::class, 'inicio'])->name('inicio')->middleware('auth');
Route::get('/inicios', [LoginController::class, 'inicios'])->name('inicios');
Route::post('/cerrar-sesion-dispositivo', [LoginController::class, 'closeSessionForDevice'])->name('cerrar_sesion_dispositivo');
Route::post('/actualizar', [LoginController::class, 'actualizar'])->name('actualizar');

Route::prefix('admin')->group(function () {
    // Gestion de catalogos
    Route::resource('categorias', CategoriasController::class)
        ->parameters(['categorias' => 'categorias'])
        ->names('categorias')
        ->middleware('checkRole:1');

    Route::resource('materiales', MaterialesController::class)
        ->parameters(['materiales' => 'materiales'])
        ->names('materiales')
        ->middleware('checkRole:2');

    Route::resource('monedas', MonedasController::class)
        ->parameters(['monedas' => 'monedas'])
        ->names('monedas')
        ->middleware('checkRole:3');

    Route::resource('tasas', TasasController::class)
        ->parameters(['tasas' => 'tasas'])
        ->names('tasas')
        ->middleware('checkRole:4');

    // Gestion de promociones
    Route::resource('promociones', PromocionesController::class)
        ->parameters(['promociones' => 'promociones'])
        ->names('promociones')
        ->middleware('checkRole:5');

    Route::resource('canje', CanjearController::class)
        ->parameters(['canje' => 'canje'])
        ->names('canje')
        ->middleware('checkRole:6');

    // Areas de conocimientos
    Route::resource('areas', AreasController::class)
        ->parameters(['areas' => 'areas'])
        ->names('areas')
        ->middleware('checkRole:7');
    Route::delete('/areas/destroydetalles/{id}', [AreasController::class, 'destroydetalles'])->name('areas.destroydetalles')->middleware('checkRole:7');

    Route::resource('carreras', CarrerasController::class)
        ->parameters(['carreras' => 'carreras'])
        ->names('carreras')
        ->middleware('checkRole:8');

    Route::resource('acopios', AcopiosController::class)
        ->parameters(['acopios' => 'acopios'])
        ->names('acopios')
        ->middleware('checkRole:9');

    Route::resource('recicladoras', RecicladorasController::class)
        ->parameters(['recicladoras' => 'recicladoras'])
        ->names('recicladoras')
        ->middleware('checkRole:10');

    Route::resource('entregas', EntregasController::class)
        ->parameters(['entregas' => 'entregas'])
        ->names('entregas')
        ->middleware('checkRole:16');

    Route::resource('inventarios', InventariosController::class)
        ->parameters(['inventarios' => 'inventarios'])
        ->names('inventarios')
        ->middleware('checkRole:17');

    Route::resource('material', MaterialController::class)
        ->parameters(['material' => 'material'])
        ->names('material')
        ->middleware('checkRole:11');

    // Gestion de usuarios
    Route::resource('roles', RolesController::class)
        ->parameters(['roles' => 'roles'])
        ->names('roles')
        ->middleware('checkRole:12');

    Route::resource('privilegios', PrivilegiosController::class)
        ->parameters(['privilegios' => 'privilegios'])
        ->names('privilegios')
        ->middleware('checkRole:14');

    Route::resource('/permisos', PermisoController::class)
        ->parameters(['permisos' => 'permisos'])
        ->names('permisos')
        ->middleware('checkRole:15');

    Route::resource('/usuarios', UsersController::class)
        ->parameters(['usuarios' => 'usuarios'])
        ->names('usuarios')
        ->middleware('checkRole:13');
    Route::delete('/usuarios/destroyroles/{id}', [UsersController::class, 'destroyroles'])->name('usuarios.destroyroles')->middleware('checkRole:13');
    Route::get('/pdf/credenciales/{id}', [UserExportController::class, 'credenciales'])->name('credenciales')->middleware('checkRole:13');

});

Route::prefix('clientes')->group(function () {
    // Gestión de la vista del cliente
    Route::get('inicios', [ClienteController::class, 'index'])->name('clientes.inicios')->middleware('auth');

    Route::get('promociones', [PromocionesClienteController::class, 'promociones'])->name('promociones')->middleware('auth');
    Route::get('local/{slug}', [PromocionesClienteController::class, 'show'])->name('cliente.show')->middleware('auth');
    Route::get('establecimiento', [EstablecimientosController::class, 'establecimientos'])->name('establecimientos')->middleware('auth');

    Route::get('residuos', [ResiduosController::class, 'residuos'])->name('residuos')->middleware('auth');

    Route::get('canje', [CanjeController::class, 'index'])->name('canje.inicio')->middleware('auth');

});



