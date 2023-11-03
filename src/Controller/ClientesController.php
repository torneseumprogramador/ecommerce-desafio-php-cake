<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 */
class ClientesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 5,
            'order' => [
                'clientes.id' => 'desc'
            ]
        ];

        $nome = isset($this->request->getQuery()["nome"]) ? $this->request->getQuery()["nome"] : "";

        $query = $this->Clientes->find();
        if( $nome != "" ){
            // $query = $query->where(['Clientes.nome' => $nome]); # match exato
            // $query = $query->where("Clientes.nome like '%$nome%'"); # like sql injection
            
            $query = $query->where([
                'Clientes.nome LIKE' => '%' . $nome . '%'
            ]);
        }

        $query = $query->order(['Clientes.id' => 'DESC']);

        $clientes = $this->paginate($query);

        $response = $this->response->withType('application/json')
            ->withStringBody(json_encode($clientes));
        
        return $response;
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->find()->where(['id' => $id])->first();

        if(isset($cliente)){
            $response = $this->response->withType('application/json')
                ->withStringBody(json_encode($cliente));
        }
        else{
            $response = $this->response->withType('application/json')
                ->withStringBody(json_encode([
                    "mensagem" => "Cliente não encontrado"
                ]))->withStatus(404);
        }
        
        return $response;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEmptyEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                return $this->response->withType('application/json')->withStringBody(json_encode($cliente))->withStatus(201);
            }
        }
        
        return $this->response->withType('application/json')
            ->withStringBody(json_encode([
                "mensagem" => 'O cliente não pode ser salvo, verifique se você passou os campos como nome, email e telefone no formulário'
                ]))
            ->withStatus(400);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->find()->where(['id' => $id])->first();

        if(!isset($cliente)){
            return $this->response->withType('application/json')
                ->withStringBody(json_encode([
                    "mensagem" => "Cliente não encontrado"
                ]))->withStatus(404);
        }

        if ($this->request->is(['patch', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                return $this->response->withType('application/json')->withStringBody(json_encode($cliente))->withStatus(200);
            }
        }

        return $this->response->withType('application/json')
            ->withStringBody(json_encode([
                "mensagem" => 'O cliente não pode ser salvo, verifique se você passou os campos como nome, email e telefone no formulário'
            ]))
            ->withStatus(400);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);

        $cliente = $this->Clientes->find()->where(['id' => $id])->first();

        if(isset($cliente)){
            if ($this->Clientes->delete($cliente)) {
                $response = $this->response->withStatus(204)->withStringBody(json_encode([]));
                return $response;
            }
            else{
                $mensagem = "Ops. não deu para apagar o cliente";
            }
        }
        else{
            $mensagem = "Cliente de ID: $id não foi encontrado";
        }

        $response = $this->response->withType('application/json')
            ->withStringBody(json_encode([
                "mensagem" => $mensagem
            ]))->withStatus(400);
        
        return $response;
    }
}
