<?php

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('minhaprimeiraview', function () {
    return view('segundaview');
});
*/

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-usuario', function(Request $request){
	//dd($request->all());
    Usuario::create([
        'nome'=>$request->nome,
        'email'=>$request->email,
        'senha'=>$request->senha,
    ]);

    echo "Usuario criado com sucesso!";
});


Route::get('/listar-usuario/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $usuario = Usuario::find($id);
    return view('listar', ['usuario' => $usuario]);
    //a view em questao está nomeada como formulario
});

Route::get('/editar-usuario/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $usuario = usuario::find($id);
    return view('editar', ['usuario' => $usuario]);
});

Route::post('/editar-usuario/{id}', function(Request $request, $id){
    //dd($request->all());
    $usuario = usuario::find($id);

    $usuario->update([
        'nome' => $request->nome,
        'email' => $request->email,
        'senha' => $request->senha
    ]);
    echo "Usuario editado com sucesso!";
});

Route::get('/excluir-usuario/{id}', function($id){
    //dd($request->all());
    $usuario = usuario::find($id);

    $usuario->delete();

    echo "Usuario excluido!";
});
