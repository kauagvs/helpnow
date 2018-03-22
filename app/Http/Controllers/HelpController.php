<?php

namespace HelpNow\Http\Controllers;

use App\HelpCadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Redirect;
use HelpNow\Http\RequestsHelpFormRequest;
use DB;

class HelpController extends Controller
{

    public function __construct(){
        //
    }

    public function index()
    {
        // if ($request) {
        //     $query=trim($request->get('searchText'));
        //     $help=DB::table('help_cadastro');
            

        //     return view('HelpNow.HelpController.listar', [
        //         "help"=>$help, "searchText"=>$query
        //     ]);

        // }

            $help = HelpCadastro::latest()->paginate(5);


            return view('HelpNow.HelpController.listar',compact('help'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }


    public function create()
    {
        return view('HelpNow.HelpController.adicionar');
    }


    public function store(HelpFormRequest $request)
    {
        $help = new HelpCadastro;
        $help->problema=$request->get('problema');
        $help->descricao=$request->get('descricao');
        $help->status=$request->get('status');
        $help->save();
        return Redirect::to('HelpNow.HelpController.listar');

    }


    public function show($id)
    {
        return view('HelpNow.HelpController.listar.show', 
            ["help"=>HelpCadastro::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view('HelpNow.HelpController.listar.edit', 
            ["help"=>HelpCadastro::findOrFail($id)]);
    }


    public function update(HelpFormRequest $request, $id)
    {
        $help=HelpCadastro::findOrFail($id);
        $help->problema=$request->get('problema');
        $help->descricao=$request->get('descricao');
        $help->status=$request->get('status'); 
        $help->update();   
        return Redirect::to('HelpNow.HelpController.listar'); 
    }


    public function destroy($id)
    {
        $help=HelpCadastro::findOrFail($id);
        $help->condicao='0';
        $help->update();
        return Redirect::to('HelpNow.HelpController.listar');
    }
}
