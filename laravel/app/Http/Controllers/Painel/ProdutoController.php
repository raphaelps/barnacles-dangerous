<?php

  namespace App\Http\Controllers\Painel;

  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;
  use App\Models\Painel\Produtos;

  class ProdutoController extends Controller {

      private $produtos;

      public function __construct(Produtos $produtos) {
          $this->produtos = $produtos;
      }

//constutor que pode ser usado em qualquer classe do controler

      public function index() {
          $product = $this->produtos->all();

          return view('painel.produto.index', compact('product'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create() {
          //
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request) {
          //
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id) {
          //
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id) {
          //
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, $id) {
          //
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id) {
          //
      }

      public function tests() {

          //deletar dados item

          $delete = $this->produtos
                  ->where('number','=' ,12541)
                  ->delete();
          if ($delete)
              return 'Deletado com sucesso.';
          else
              return 'erro ao deletar.';

          //$prod = $this->produtos->destroy(7); 

          /* $prod = $this->produtos->find(7);
            $delete = $prod->delete();
            if($delete)
            return 'Deletado com sucesso.';
            else
            return 'erro ao deletar.';
           */


          /* alterar dados
            $prod = $this->produtos->find(6);
            $update = $prod->update([
            'name' => 'sabonete',
            'number' => 5264,
            'active' => true,
            'category' => 'banho',
            'description' => 'produto para tomar banho'
            ]);
            if ($update) {
            return "inserido com sucesso";
            } else {
            return 'falha ao inserir';
            }




            $prod = $this->produtos->find(6);
            $prod->name = 'Palmolivre';
            $prod->number = 51;
            $prod->active = true;
            $prod->category = 'banho';
            $prod->description = 'sabonete de banho - update';
            $update = $prod->save();
            if ($update)
            return "alterado com sucesso ";
            else
            return 'falha ao alterar';

            //dd($prod);//debug laravel - var_dump($prod[0]);echo $prod[0];

            inserir dados
           * $insert = $this->produtos->create([
            'name'        => 'sabonete',
            'number'      => 5264,
            'active'      => true,
            'category'    => 'banho',
            'description' => 'produto para tomar banho'
            ]);
            if ($insert) {
            return "inserido com sucesso ID: {$insert->id}";
            } else {
            return 'falha ao inserir';

            }
            $prod = $this->produtos;
            $prod->name = 'nome do produto';
            $prod->number = 123456;
            $prod->active = true;
            $prod->category = 'eletronicos';
            $prod->description = 'descrição do produto';
            $insert = $prod->save();

            if ($insert){
            return 'inserido com sucesso';
            }else {
            return 'falha ao inserir';
            }
           */
      }

  }
  