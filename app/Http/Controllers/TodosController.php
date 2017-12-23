<?php

namespace App\Http\Controllers;

class TodosController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        //
    }

    public function index(){
      return "Todos {GET}";
    }

    public function store(){
      return "Todos {POST}";
    }

    public function update(){
      return "Todos {PATCH:id}";
    }

    public function view(){
      return "Todos {GET:id}";
    }

    public function delete(){
      return "Todos {DELETE:id}";
    }

}
