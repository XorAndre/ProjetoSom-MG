<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[] paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $news = $this->News->find('all');
        foreach ($news as $key => $value) {
            $im[] = $this->News->Images->preparePath($value['image_id']); 
        }
        $this->News->Images->deleteUnlinkeds();
        $this->set(compact('news'));
        $this->set(compact('im'));
        $this->set('_serialize', ['news']);
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('news', $news);
        $this->set('_serialize', ['news']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $news = $this->News->newEntity();
        if ($this->request->is('post')) {
            $imagemsalva = $this->News->Images->saveImage($this->request->getData()['Image']);
            if($imagemsalva){
                $data = $this->request->getData();
                $data['image_id'] = $imagemsalva->id;
                $news = $this->News->patchEntity($news, $data);
                if ($this->News->save($news)) {
                    $this->Flash->success(__('The news has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The news could not be saved. Please, try again.'));
            }else
            $this->Flash->error(__('Não foi possivel salvar a imagem.'));
        }
        $images = $this->News->Images->find('list', ['limit' => 200]);
        $this->set(compact('news', 'images'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemsalva = $this->News->Images->saveImage($this->request->getData()['Image']);
            if($imagemsalva){
                $data = $this->request->getData();
                $data['image_id'] = $imagemsalva->id;
                $news = $this->News->patchEntity($news, $data);
                if ($this->News->save($news)) {
                    $this->Flash->success(__('The news has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            }else
            $this->Flash->error(__('Não foi possivel salvar a imagem.'));

            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $images = $this->News->Images->find('list', ['limit' => 200]);
        $this->set(compact('news', 'images'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
