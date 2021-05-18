<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(['nome'=>'Camiseta Polo', 'preco'=>100, 'estoque'=>4, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome'=>'Camisas', 'preco'=>1000, 'estoque'=>20, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome'=>'Saia', 'preco'=>120, 'estoque'=>45, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome'=>'Jogos', 'preco'=>23, 'estoque'=>163, 'categoria_id'=>2]);
        DB::table('produtos')->insert(['nome'=>'Mouse', 'preco'=>18, 'estoque'=>16, 'categoria_id'=>6]);
    }
}
