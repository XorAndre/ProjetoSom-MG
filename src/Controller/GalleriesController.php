<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Galleries Controller
 *
 * @property \App\Model\Table\GalleriesTable $Galleries
 *
 * @method \App\Model\Entity\Gallery[] paginate($object = null, array $settings = [])
 */
class GalleriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $galleries = $this->paginate($this->Galleries);

        $this->set(compact('galleries'));
        $this->set('_serialize', ['galleries']);
    }

    /**
     * View method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gallery = $this->Galleries->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('gallery', $gallery);
        $this->set('_serialize', ['gallery']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $gallery = $this->Galleries->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $capa = $this->Galleries->Images->newEntity();
            $capa = $this->Galleries->Images->patchEntity($capa,['name' => $data['capa']]);
            $capa = $this->Galleries->Images->save($capa);
            if($capa){
                $data['image_id'] = $capa->id;
                $gallery = $this->Galleries->patchEntity($gallery, $data);
                $gallery = $this->Galleries->save($gallery);
                if ($gallery) {
                    foreach ($data['fotos'] as $key => $value) {
                        $img['name'] = $value;
                        $image = $this->Galleries->Images->newEntity();
                        $image = $this->Galleries->Images->patchEntity($image,$img);
                        $image = $this->Galleries->Images->save($image);
                        if(!$image){
                            $this->Flash->error('Não foi possível salvar a imagem '. $key.' .');
                        } else {
                            $galeriaImagem = $this->Galleries->GalleriesImages->newEntity();
                            $galeriaImagem = $this->Galleries->GalleriesImages->patchEntity($galeriaImagem, ['gallery_id' => $gallery->id, 'image_id' => $image->id]);
                            $galeriaImagem = $this->Galleries->GalleriesImages->save($galeriaImagem);
                        }
                        unset($img);
                    }

                    $this->Flash->success(__('Galeria Criada!.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('A galeria não foi salva, tente novamente.'));
        }
        $images = $this->Galleries->Images->find('list', ['limit' => 200]);
        $this->set(compact('gallery', 'images'));
        $this->set('_serialize', ['gallery']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gallery = $this->Galleries->get($id, [
            'contain' => ['Images']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gallery = $this->Galleries->patchEntity($gallery, $this->request->getData());
            if ($this->Galleries->save($gallery)) {
                $this->Flash->success(__('The gallery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallery could not be saved. Please, try again.'));
        }
        $images = $this->Galleries->Images->find('list', ['limit' => 200]);
        $this->set(compact('gallery', 'images'));
        $this->set('_serialize', ['gallery']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gallery = $this->Galleries->get($id);
        if ($this->Galleries->delete($gallery)) {
            $this->Flash->success(__('The gallery has been deleted.'));
        } else {
            $this->Flash->error(__('The gallery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
