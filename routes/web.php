
<?php

/*
Como estamos criando uma aplicação completa na web, 
usaremos o web.php. 
Nesse arquivo, temos uma rota para o verbo get do HTTP. Quando acessarmos a rota /, 
o PHP executará a função function () que retorna uma view chamada welcome.

|Route::get('/', function () {
    return view('welcome');
});
Introduzir apenas rotas(URLs existentes) que redirecionam
a requisição para arq que deem resposta

*/

/* Exibir HTML na rota - lista em que cada item
$series = $serie em questão 
.= é usado para concatenar 
o que está à direita à variável na esquerda.
$html = "<ul>";
foreach ($series as $serie){
  $html .="<li>$serie</li>";
}
$html .= "</ul>";

return $html;
*/
use Illuminate\Support\Facades\App ;
use Illuminate\Support\Facades\Artisan ;
use Illuminate\Support\Facades\Auth ;

Route::get('/series', 'SeriesController@index');
  /*->name('listar_series'); */

/*configurar rota que leva a esse form e seu método */
Route::get('/series/criar', 'SeriesController@create');
  /*name('form_criar_serie'); 
  Rotas nomeadas para facilitar manutenção e acesso*/

Route::post('/series/criar', 'SeriesController@store');


Route::delete('/series/{id}', 'SeriesController@destroy');



