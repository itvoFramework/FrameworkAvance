<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Organizadores Controller
 *
 *
 * @method \App\Model\Entity\Organizadore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizadoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $organizadores = $this->paginate($this->Organizadores);

        $this->set(compact('organizadores'));
    }

    /**
     * View method
     *
     * @param string|null $id Organizadore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizadore = $this->Organizadores->get($id, [
            'contain' => [],
        ]);

        $this->set('organizadore', $organizadore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizadore = $this->Organizadores->newEmptyEntity();
        if ($this->request->is('post')) {
            $organizadore = $this->Organizadores->patchEntity($organizadore, $this->request->getData());
            if ($this->Organizadores->save($organizadore)) {
                $this->Flash->success(__('The organizadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organizadore could not be saved. Please, try again.'));
        }
        $this->set(compact('organizadore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organizadore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizadore = $this->Organizadores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizadore = $this->Organizadores->patchEntity($organizadore, $this->request->getData());
            if ($this->Organizadores->save($organizadore)) {
                $this->Flash->success(__('The organizadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organizadore could not be saved. Please, try again.'));
        }
        $this->set(compact('organizadore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organizadore id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizadore = $this->Organizadores->get($id);
        if ($this->Organizadores->delete($organizadore)) {
            $this->Flash->success(__('The organizadore has been deleted.'));
        } else {
            $this->Flash->error(__('The organizadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
