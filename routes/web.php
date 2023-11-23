<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


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





//rotas site//
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/cpaas', function () {
    return view('cpaas');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});
//rotas site//

Route::post('/registrar', [UserController::class, 'registrar']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/logar', [UserController::class, 'logar']);


//rotas site//


// ...

Route::middleware(['admin'])->group(function () {
    // Rotas que exigem permissão de administrador
    Route::get('/admin', function () {
        return view('admin');
    });
    // Adicione mais rotas aqui
});

//rotas auth admin//
// web.php

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [UserController::class, 'listarUsuarios']);
    // Outras rotas...
});


Route::middleware(['admin'])->group(function () {
    // Outras rotas...
    Route::put('/admin/editar/{id}', [UserController::class, 'atualizarUsuario'])->name('atualizarUsuario');
});

//rotas crud//
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [UserController::class, 'listarUsuarios']);
    Route::get('/admin/editar/{id}', [UserController::class, 'editarUsuario'])->name('editarUsuario');
    Route::post('/admin/editar/{id}', [UserController::class, 'atualizarUsuario'])->name('atualizarUsuario');
    Route::get('/admin/excluir/{id}', [UserController::class, 'excluirUsuario'])->name('excluirUsuario');
    // Outras rotas...
});
// ...
Route::middleware(['admin'])->group(function () {
    // Outras rotas...
    Route::delete('/admin/excluir/{id}', [UserController::class, 'excluirUsuario'])->name('excluirUsuario');
});

Route::middleware(['admin'])->group(function () {
    // Outras rotas...
    Route::post('/admin/adicionar', [UserController::class, 'adicionarUsuario'])->name('adicionarUsuario');
});

//rotas crud//




Route::view('/forgot-password', 'forgot-password')->name('password.reset');
Route::post('/forgot-password', [UserController::class, 'resetPassword']);

// Adicione rotas de autenticação de dois fatores, se necessário
