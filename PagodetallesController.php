<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pagodetalles Controller
 *
 * @property \App\Model\Table\PagodetallesTable $Pagodetalles
 *
 * @method \App\Model\Entity\Pagodetalle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PagodetallesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pagos', 'Catalogos'],
        ];
        $pagodetalles = $this->paginate($this->Pagodetalles);

        $this->set(compact('pagodetalles'));
    }

    /**
     * View method
     *
     * @param string|null $id Pagodetalle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagodetalle = $this->Pagodetalles->get($id, [
            'contain' => ['Pagos', 'Catalogos'],
        ]);

        $this->set('pagodetalle', $pagodetalle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagodetalle = $this->Pagodetalles->newEmptyEntity();
        if ($this->request->is('post')) {
            $pagodetalle = $this->Pagodetalles->patchEntity($pagodetalle, $this->request->getData());
            if ($this->Pagodetalles->save($pagodetalle)) {
                $this->Flash->success(__('The pagodetalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagodetalle could not be saved. Please, try again.'));
        }
        $pagos = $this->Pagodetalles->Pagos->find('list', ['limit' => 200]);
        $catalogos = $this->Pagodetalles->Catalogos->find('list', ['limit' => 200]);
        $this->set(compact('pagodetalle', 'pagos', 'catalogos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pagodetalle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagodetalle = $this->Pagodetalles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagodetalle = $this->Pagodetalles->patchEntity($pagodetalle, $this->request->getData());
            if ($this->Pagodetalles->save($pagodetalle)) {
                $this->Flash->success(__('The pagodetalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagodetalle could not be saved. Please, try again.'));
        }
        $pagos = $this->Pagodetalles->Pagos->find('list', ['limit' => 200]);
        $catalogos = $this->Pagodetalles->Catalogos->find('list', ['limit' => 200]);
        $this->set(compact('pagodetalle', 'pagos', 'catalogos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagodetalle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagodetalle = $this->Pagodetalles->get($id);
        if ($this->Pagodetalles->delete($pagodetalle)) {
            $this->Flash->success(__('The pagodetalle has been deleted.'));
        } else {
            $this->Flash->error(__('The pagodetalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
