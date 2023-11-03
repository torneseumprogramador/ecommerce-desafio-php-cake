<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;

class HomeController extends AppController
{
    public function index(): ?Response
    {
        $this->autoRender = false; // Evita que o CakePHP tente renderizar uma view

        // Dados que você quer enviar como JSON
        $data = [
            "mensagem" => "Bem vindo a API Cake PHP",
            "endpoints" => [
                "clientes" => [
                    "GET" => "/api/clientes",
                    "GET " => "/api/clientes/{id}",
                    "POST" => [
                        "endpoint" => "/api/clientes/criar",
                        "body" => [
                            "nome" => "??",
                            "telefone" => "??",
                            "email" => "??",
                            "endereco" => "??"
                        ]
                    ],
                    "PUT" => [
                        "endpoint" => "/api/clientes/{id}/alterar",
                        "body" => [
                            "nome" => "??",
                            "telefone" => "??",
                            "email" => "??",
                            "endereco" => "??"
                        ]
                    ],
                    "DELETE" => "/api/clientes/{id}/excluir",
                ],
                "pedidos" => "/api/pedidos",
            ]
        ];

        $response = $this->response->withType('application/json')
                                   ->withStringBody(json_encode($data));

        return $response;
    }
}
