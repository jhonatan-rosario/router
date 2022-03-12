<?php

use Library\Request;

$router->get('/', function() {
    echo 'Página inicial';
});

$router->get('/produtos', function() {
    echo 'Página de produtos';
});

// echo $request->all();
$router->post('/contato', function($request) {
    echo $request->nome;
    echo $request->idade;
});

$router->get('/controller', 'Controller@index');
$router->post('/controller', 'Controller@store');

// $router->get('/produto/{id}', function($id) {
//     echo $id;
// });

// $router->get('/produto/{produto}/categoria/{categoria}', function($produto, $categoria) {
//     echo $produto . "<br />";
//     echo $categoria . "<br/>";
// });

// $router->get(['set' => '/cliente/{cliente_id}', 'as' => 'clientes.edit'], function($cliente_id) {
//     echo "Cliente => " . $cliente_id;
// });

// $router->get('/cliente', function() use($router){
//     echo '<a href="' . $router->translate('clientes.edit', 1) . '">Clique aqui para testar a rota clientes.edit</a>';
// });

//$router->get('/categoria', 'CategoriaController@index');

//$router->get(['set' => '/exemplo', 'namespace' => 'App\\Http\\Controllers\\Example'], 'ExampleController@index');