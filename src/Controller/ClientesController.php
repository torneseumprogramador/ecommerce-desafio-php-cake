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

        $this->set(compact('clientes'));
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
        $cliente = $this->Clientes->get($id, contain: []);
        $this->set(compact('cliente'));
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
                $this->Flash->success(__('Cliente incluido com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O cliente não pode ser salvo, verifique se você passou os campos como nome, email e telefone no formulário'));
        }
        $this->set(compact('cliente'));
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
        $cliente = $this->Clientes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Cliente alterado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O cliente não pode ser salvo, por favor tente novamente.'));
        }
        $this->set(compact('cliente'));
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
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('Cliente apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Ops. não deu para apagar o cliente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
