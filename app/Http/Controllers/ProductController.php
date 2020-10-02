<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //função para exibir os produtos
    public function index()
    {
        // $produtos = DB::select('select * from produtos');
        $produtos = Produto::paginate(10);
    
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function ListaJson()
    {
        $produtos = DB::select('select * from produtos');

        $retorno = ['status' => true,
                    'message' => 'pool cadastrado com sucesso'];


        return response()->json($retorno, 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //função para colocar novos produtos no banco
    public function store(Request $request)
    {

        //consulta primeira versão

        // $nome = $request->input('nome');
        // $valor = $request->input('valor'); 
        // $descricao = $request->input('descricao'); 
        // $quantidade = $request->input('quantidade');

        // DB::insert('insert into produtos (nome, descricao, valor, quantidade) values (?,?,?,?)', array($nome, $descricao, $valor, $quantidade));

        // return redirect('/listagem')->withInput($request->only('nome'));

//<------------------------------------------------------------------------------------------------------------->

        $produto = new Produto(); 
        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao'); 
        $produto->quantidade = $request->input('quantidade');

        $produto->valor = str_replace("," , "." , $produto->valor);
        
        $produto->save();

        return redirect('/listagem')->withInput($request->only('nome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //função para mostrar descrição dos produtos
    public function show($id)
    {
        $resposta = DB::select('select * from produtos where produto_id = ?', ["$id"]);

        if(empty($resposta)) { 
            return "Esse produto não existe"; 
        }
            
        return view('produto.descricao')->with('p', $resposta[0]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resposta = DB::select('select * from produtos where produto_id = ?', ["$id"]);
            
        return view('produto.editar')->with('p', $resposta[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if (!$produto){
            return response()->json(['message' => 'produto não encontrado'],404);
        }

        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao'); 
        $produto->quantidade = $request->input('quantidade');

        $produto->valor = str_replace("," , "." , $produto->valor);
        
        $produto->save();

        return redirect('/listagem')->withInput($request->only('nome'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect(route('listagem_produto'));
    }

    public function delete($id)
    {
        $produto = Produto::find($id);

        return view('produto.delete')->with('p', $produto);
    }
}
