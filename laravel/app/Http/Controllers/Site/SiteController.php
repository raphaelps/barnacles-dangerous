<?php

  namespace App\Http\Controllers\Site;

  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;

  class SiteController extends Controller {

      public function index() {
          return "pagina inicial prejeto";
      }

      public function contato() {
          return "pagina contato";
      }

      public function categoria($id) {
          return "pagina categoria por {$id}";
      }

      public function categoriaOp($id = 1) {
          return "pagina categoria dinamica = {$id}";
      }

  }