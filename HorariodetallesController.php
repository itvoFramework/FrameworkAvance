<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Horariodetalles Controller
 *
 * @property \App\Model\Table\HorariodetallesTable $Horariodetalles
 *
 * @method \App\Model\Entity\Horariodetalle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HorariodetallesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Horarios'],
        ];
        $horariodetalles = $this->paginate($this->Horariodetalles);

        $this->set(compact('horariodetalles'));
    }

    /**
     * View method
     *
     * @param string|null $id Horariodetalle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $horariodetalle = $this->Horariodetalles->get($id, [
            'contain' => ['Horarios'],
        ]);

        $this->set('horariodetalle', $horariodetalle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $horariodetalle = $this->Horariodetalles->newEmptyEntity();
        if ($this->request->is('post')) {
            $horariodetalle = $this->Horariodetalles->patchEntity($horariodetalle, $this->request->getData());
            if ($this->Horariodetalles->save($horariodetalle)) {
                $this->Flash->success(__('The horariodetalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horariodetalle could not be saved. Please, try again.'));
        }
        $horarios = $this->Horariodetalles->Horarios->find('list', ['limit' => 200]);
        $this->set(compact('horariodetalle', 'horarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Horariodetalle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $horariodetalle = $this->Horariodetalles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $horariodetalle = $this->Horariodetalles->patchEntity($horariodetalle, $this->request->getData());
            if ($this->Horariodetalles->save($horariodetalle)) {
                $this->Flash->success(__('The horariodetalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horariodetalle could not be saved. Please, try again.'));
        }
        $horarios = $this->Horariodetalles->Horarios->find('list', ['limit' => 200]);
        $this->set(compact('horariodetalle', 'horarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Horariodetalle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $horariodetalle = $this->Horariodetalles->get($id);
        if ($this->Horariodetalles->delete($horariodetalle)) {
            $this->Flash->success(__('The horariodetalle has been deleted.'));
        } else {
            $this->Flash->error(__('The horariodetalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
