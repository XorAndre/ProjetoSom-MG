<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 *
 * @method \App\Model\Entity\Banner[] paginate($object = null, array $settings = [])
 */
class BannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $banners = $this->Banners->find('all', ['contain' => 'Places']);
        foreach ($banners as $key => $value) {
                $aux = substr($value['path'], 12);
                $aux = str_replace('\\', '/', $aux);
                $auxarr[] = ($aux."thumbnaillateral-".$value['name']);
        }
        $this->set(compact('banners'));
        $this->set(compact('auxarr'));
        $this->set('_serialize', ['banners']);
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $places = $this->Banners->Places->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'places'));
        $this->set('_serialize', ['banner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('The banner has been deleted.'));
        } else {
            $this->Flash->error(__('The banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
