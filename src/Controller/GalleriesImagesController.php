<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GalleriesImages Controller
 *
 * @property \App\Model\Table\GalleriesImagesTable $GalleriesImages
 *
 * @method \App\Model\Entity\GalleriesImage[] paginate($object = null, array $settings = [])
 */
class GalleriesImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Galleries', 'Images']
        ];
        $galleriesImages = $this->paginate($this->GalleriesImages);

        $this->set(compact('galleriesImages'));
        $this->set('_serialize', ['galleriesImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Galleries Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galleriesImage = $this->GalleriesImages->get($id, [
            'contain' => ['Galleries', 'Images']
        ]);

        $this->set('galleriesImage', $galleriesImage);
        $this->set('_serialize', ['galleriesImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galleriesImage = $this->GalleriesImages->newEntity();
        if ($this->request->is('post')) {
            $galleriesImage = $this->GalleriesImages->patchEntity($galleriesImage, $this->request->getData());
            if ($this->GalleriesImages->save($galleriesImage)) {
                $this->Flash->success(__('The galleries image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The galleries image could not be saved. Please, try again.'));
        }
        $galleries = $this->GalleriesImages->Galleries->find('list', ['limit' => 200]);
        $images = $this->GalleriesImages->Images->find('list', ['limit' => 200]);
        $this->set(compact('galleriesImage', 'galleries', 'images'));
        $this->set('_serialize', ['galleriesImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Galleries Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galleriesImage = $this->GalleriesImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galleriesImage = $this->GalleriesImages->patchEntity($galleriesImage, $this->request->getData());
            if ($this->GalleriesImages->save($galleriesImage)) {
                $this->Flash->success(__('The galleries image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The galleries image could not be saved. Please, try again.'));
        }
        $galleries = $this->GalleriesImages->Galleries->find('list', ['limit' => 200]);
        $images = $this->GalleriesImages->Images->find('list', ['limit' => 200]);
        $this->set(compact('galleriesImage', 'galleries', 'images'));
        $this->set('_serialize', ['galleriesImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Galleries Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galleriesImage = $this->GalleriesImages->get($id);
        if ($this->GalleriesImages->delete($galleriesImage)) {
            $this->Flash->success(__('The galleries image has been deleted.'));
        } else {
            $this->Flash->error(__('The galleries image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
