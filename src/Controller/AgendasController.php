<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agendas Controller
 *
 * @property \App\Model\Table\AgendasTable $Agendas
 *
 * @method \App\Model\Entity\Agenda[] paginate($object = null, array $settings = [])
 */
class AgendasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Images']
        ];
        $agendas = $this->paginate($this->Agendas);

        $this->set(compact('agendas'));
        $this->set('_serialize', ['agendas']);
    }

    /**
     * View method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenda = $this->Agendas->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('agenda', $agenda);
        $this->set('_serialize', ['agenda']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agenda = $this->Agendas->newEntity();
        if ($this->request->is('post')) {
            $agenda = $this->Agendas->patchEntity($agenda, $this->request->getData());
            if ($this->Agendas->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $images = $this->Agendas->Images->find('list', ['limit' => 200]);
        $this->set(compact('agenda', 'images'));
        $this->set('_serialize', ['agenda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenda = $this->Agendas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenda = $this->Agendas->patchEntity($agenda, $this->request->getData());
            if ($this->Agendas->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $images = $this->Agendas->Images->find('list', ['limit' => 200]);
        $this->set(compact('agenda', 'images'));
        $this->set('_serialize', ['agenda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenda = $this->Agendas->get($id);
        if ($this->Agendas->delete($agenda)) {
            $this->Flash->success(__('The agenda has been deleted.'));
        } else {
            $this->Flash->error(__('The agenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
