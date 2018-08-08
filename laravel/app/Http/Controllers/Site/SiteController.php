<?php

  namespace App\Http\Controllers\Site;

  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;

  class SiteController extends Controller {

      public function __construct() {
          // $this->middleware('auth');
          /*
            $this->middleware('auth')
            ->only([
            'contato',
            'categoria'
            ]); 
          $this->middleware('auth')
                  ->except([
                      
                      'index',
                      'contato'
          ]);*/
          
      }

      public function index() {
          
          $title = 'Laravel 5.3 - Home';
          
          $var1 = '123';
          
          $var2 = '312';
          
          $arrayData = [1,2,3,4,5,6,7,8,9];
          
          return view('site.home.index', compact('title','var1', 'var2', 'arrayData'));
      }

      public function contato() {
          
          $title = 'Laravel 5.3 - Contato';
          
          $xss = '<script>alert("ataque xss");</script>';
          return view('site.contact.contact', compact('title', 'xss'));
      }

      public function categoria($id) {
          return "pagina categoria por {$id}";
      }

      public function categoriaOp($id = 1) {
          return "pagina categoria dinamica = {$id}";
      }

  }
  