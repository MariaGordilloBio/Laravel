<?php

/* Classe que será responsável por controlar 
a requisição para determinadas URLs (Controller). */

/*A rmazenar açoes referentes as series */

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use Illuminate\Http\Request;

/*namespacepara que o laravel consiga encontrar o controlador */

class SeriesController extends Controller{
/* SeriesController é uma classe filha e herdam prop
da Controller */
     public function index(Request $request) {

        $series = serie::query()
            ->orderBy('nome') 
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }
/* compact('series')-- função buscavar com nome que foi passado 
retorna array no mesmo formato acima */
    
/* deve procurar na pasta "Series" um arquivo chamado "index", 
sem que seja necessário informar a extensão */
    
    public function create(){

        return view('series.create');
/*responsável por exibir o form para user */

    }

    public function store(SeriesFormRequest $request){

/*salvando uma série e exibindo-a para o próprio usuário*/
    
    $serie= Serie::create($request->all());

    $request->session()
        ->flash(
/*mensagem dura apenas durante requisição*/
            'mensagem',
            "Série {$serie->id} criada com sucesso {$serie->nome}"
        );

/*usuário redirecionado*/
    return redirect()->route('listar_series');
    
    

    }

/*função excluir série da lista */
public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Série removida com sucesso"
            );
        return redirect()->route('listar_series');
    }
/*requisição get
-- pega na requisição o nome que foi enviado pelo form */

}



