<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Categoria;
use App\Produto;

Route::get('/categorias', function () {
   
    $cats = Categoria::all();
    if(count($cats)===0)
        echo "<h4>Você não possui categorias cadastrada</h4>";
    else{
        foreach($cats as $c){
            echo "<p>" . $c->nome . " - " . $c->id. "</p>";
        }
    }


});


Route::get('/produtos', function () {
   
    $prods = Produto::all();
    if(count($prods)===0)
        echo "<h4>Você não possui produto cadastrado</h4>";
    else{
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preço</td><td>Categoria</td></tr></thead>";
        foreach($prods as $p){
            echo "<tr>";
            echo "<td>" . $p->nome . "</td>";
            echo "<td>" . $p->estoque . "</td>";
            echo "<td>" . $p->preco . "</td>";
            echo "<td>" . $p->categoria->nome . "</td>";
            echo "</tr>";
        }
    }


});

Route::get('/categorias-produto', function () {
   
    $cats = Categoria::all();
    if(count($cats)===0)
        echo "<h4>Você não possui categorias cadastrada</h4>";
    else{
        foreach($cats as $c){
            echo "<p>" . $c->nome . " - " . $c->id. "</p>";
            $produtos = $c->produtos;

            if(count($produtos) > 0){
                echo "<ul>";
                foreach($produtos as $p){
                    echo "<li>" . $p->nome . "</li>";
                }
                echo "</ul>";
            }

        }
    }


});
