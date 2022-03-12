<?php
namespace Http\Controllers;

class Controller {
    public function index() {
        echo 'Controller Index';
    }

    public function store($request) {
        echo 'Controller Store: ' . $request->nome;
    }
}