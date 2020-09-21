<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title' => 'PHP Para Quem Conhece PHP: Recursos Avançados Para a Criação de Websites Dinâmicos',
            'pages' => 544,
            'price' => 79.20,
            'id_user' => '2'
        ]);

        $book->create([
            'title' => 'PHP Programando com Orientação a Objetos',
            'pages' => 568,
            'price' => 85.00,
            'id_user' => '1'
        ]);

        $book->create([
            'title' => 'PHP Moderno: Novos Recursos e Boas Práticas',
            'pages' => 296,
            'price' => 60.00,
            'id_user' => '3'
        ]);

        $book->create([
            'title' => 'Criando Relatórios com Php',
            'pages' => 408,
            'price' => 75.00,
            'id_user' => '1'
        ]);

        $book->create([
            'title' => 'JavaScript: O Guia Definitivo',
            'pages' => 1080,
            'price' => 146.08,
            'id_user' => '4'
        ]);

        $book->create([
            'title' => 'Padrões JavaScript',
            'pages' => 240,
            'price' => 49.73,
            'id_user' => '5'
        ]);

        $book->create([
            'title' => 'Aprendendo Node: Usando JavaScript no Servidor',
            'pages' => 312,
            'price' => 66.75,
            'id_user' => '6'
        ]);

        $book->create([
            'title' => 'Use A Cabeça! Programação Em HTML5',
            'pages' => 608,
            'price' => 104.80,
            'id_user' => '7'
        ]);

        $book->create([
            'title' => 'Web Interativa com Ajax e PHP',
            'pages' => 304,
            'price' => 59.96,
            'id_user' => '2'
        ]);

        $book->create([
            'title' => 'Primeiros passos com React: Construindo aplicações web',
            'pages' => 280,
            'price' => 52.26,
            'id_user' => '5'
        ]);
    }
}
