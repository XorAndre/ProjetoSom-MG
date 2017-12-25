<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Albums Controller
 *
 * @property \App\Model\Table\AlbumsTable $Albums
 *
 * @method \App\Model\Entity\Album[] paginate($object = null, array $settings = [])
 */
class AlbumsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $albums = $this->Albums->find('all', ['contain' => 'Songs']);
        $this->Albums->deleteUnlinkeds();
        $this->set(compact('albums'));
        $this->set('_serialize', ['albums']);
    }

    /**
     * View method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $album = $this->Albums->get($id, [
            'contain' => ['Songs']
        ]);

        $this->set('album', $album);
        $this->set('_serialize', ['album']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function editMusics($id){
        $album_songs = $this->Albums->get($id, [
            'contain' => ['Songs']
        ]);
        $album = $this->Albums->newEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            foreach ($data['Song'] as $key => $value) {
                $song = $this->Albums->Songs->get($value['id'], [
                    'contain' => []
                     ]);
                $song = $this->Albums->Songs->patchEntity($song, $value);
                $song = $this->Albums->Songs->save($song);
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('album'));
        $this->set('album_songs', $album_songs);
        $this->set('_serialize', ['album']);
    }

    public function add()
    {
        $album = $this->Albums->newEntity();
        if ($this->request->is('post')) {
            $album = $this->Albums->patchEntity($album, $this->request->getData());
            $album = $this->Albums->save($album);
            if ($album) {
                $this->Albums->Songs->saveSongs($this->request->getData()['Songs']['file'], $album->id);
                $this->Flash->success(__('The album has been saved.'));

                return $this->redirect(['action' => 'editMusics', $album->id]);
            }
            $this->Flash->error(__('The album could not be saved. Please, try again.'));
        }
        $songs = $this->Albums->Songs->find('list', ['limit' => 200]);
        $this->set(compact('album', 'songs'));
        $this->set('_serialize', ['album']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $album = $this->Albums->get($id, [
            'contain' => ['Songs']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $album = $this->Albums->patchEntity($album, $this->request->getData());
            if ($this->Albums->save($album)) {
                $this->Flash->success(__('The album has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The album could not be saved. Please, try again.'));
        }
        $songs = $this->Albums->Songs->find('list', ['limit' => 200]);
        $this->set(compact('album', 'songs'));
        $this->set('_serialize', ['album']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $album = $this->Albums->get($id);
        if ($this->Albums->delete($album)) {
            $this->Flash->success(__('The album has been deleted.'));
        } else {
            $this->Flash->error(__('The album could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
