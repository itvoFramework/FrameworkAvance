<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ponentes Controller
 *
 *
 * @method \App\Model\Entity\Ponente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PonentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ponentes = $this->paginate($this->Ponentes);

        $this->set(compact('ponentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ponente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ponente = $this->Ponentes->get($id, [
            'contain' => [],
        ]);

        $this->set('ponente', $ponente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ponente = $this->Ponentes->newEmptyEntity();
        if ($this->request->is('post')) {
            $ponente = $this->Ponentes->patchEntity($ponente, $this->request->getData());
            if ($this->Ponentes->save($ponente)) {
                $this->Flash->success(__('The ponente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ponente could not be saved. Please, try again.'));
        }
        $this->set(compact('ponente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ponente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ponente = $this->Ponentes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ponente = $this->Ponentes->patchEntity($ponente, $this->request->getData());
            if ($this->Ponentes->save($ponente)) {
                $this->Flash->success(__('The ponente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ponente could not be saved. Please, try again.'));
        }
        $this->set(compact('ponente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ponente id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ponente = $this->Ponentes->get($id);
        if ($this->Ponentes->delete($ponente)) {
            $this->Flash->success(__('The ponente has been deleted.'));
        } else {
            $this->Flash->error(__('The ponente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
