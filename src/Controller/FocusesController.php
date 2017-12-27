<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Focuses Controller
 *
 * @property \App\Model\Table\FocusesTable $Focuses
 *
 * @method \App\Model\Entity\Focus[] paginate($object = null, array $settings = [])
 */
class FocusesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['view']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $focuses = $this->Focuses->find('all', ['contain' => 'Categories']);
        foreach ($focuses as $key => $value) {
            $im[] = $this->Focuses->Images->preparePath($value['image_id']); 
        }
        $this->set(compact('focuses'));
        $this->set(compact('im'));
        $this->set('_serialize', ['focuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Focus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
                $this->viewBuilder()->setLayout('site');
        $focus = $this->Focuses->get($id, [
            'contain' => ['Categories']
        ]);
        $focus['Image'] = $this->Focuses->Images->preparePath($focus['image_id']);
        $this->set('focus', $focus);
        $this->set('_serialize', ['focus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $focus = $this->Focuses->newEntity();
        if ($this->request->is('post')) {
            $imagemsalva = $this->Focuses->Images->saveImage($this->request->getData()['Image']);
            $data = $this->request->getData();
            $data['image_id'] = $imagemsalva->id;
            $focus = $this->Focuses->patchEntity($focus, $data);
            if ($this->Focuses->save($focus)) {
                $this->Flash->success(__('The focus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The focus could not be saved. Please, try again.'));
        }
        $this->Focuses->Images->deleteUnlinkeds();
        $categories = $this->Focuses->Categories->find('list', ['limit' => 200]);
        $images = $this->Focuses->Images->find('list', ['limit' => 200]);
        $this->set(compact('focus', 'categories', 'images'));
        $this->set('_serialize', ['focus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Focus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $focus = $this->Focuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $focus = $this->Focuses->patchEntity($focus, $this->request->getData());
            if ($this->Focuses->save($focus)) {
                $this->Flash->success(__('The focus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The focus could not be saved. Please, try again.'));
        }
        $categories = $this->Focuses->Categories->find('list', ['limit' => 200]);
        $images = $this->Focuses->Images->find('list', ['limit' => 200]);
        $this->set(compact('focus', 'categories', 'images'));
        $this->set('_serialize', ['focus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Focus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $focus = $this->Focuses->get($id);
        if ($this->Focuses->delete($focus)) {
            $this->Flash->success(__('The focus has been deleted.'));
        } else {
            $this->Flash->error(__('The focus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
