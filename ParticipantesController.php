<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Participantes Controller
 *
 *
 * @method \App\Model\Entity\Participante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParticipantesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $participantes = $this->paginate($this->Participantes);

        $this->set(compact('participantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participante = $this->Participantes->get($id, [
            'contain' => [],
        ]);

        $this->set('participante', $participante);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participante = $this->Participantes->newEmptyEntity();
        if ($this->request->is('post')) {
            $participante = $this->Participantes->patchEntity($participante, $this->request->getData());
            if ($this->Participantes->save($participante)) {
                $this->Flash->success(__('The participante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participante could not be saved. Please, try again.'));
        }
        $this->set(compact('participante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participante = $this->Participantes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participante = $this->Participantes->patchEntity($participante, $this->request->getData());
            if ($this->Participantes->save($participante)) {
                $this->Flash->success(__('The participante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participante could not be saved. Please, try again.'));
        }
        $this->set(compact('participante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participante = $this->Participantes->get($id);
        if ($this->Participantes->delete($participante)) {
            $this->Flash->success(__('The participante has been deleted.'));
        } else {
            $this->Flash->error(__('The participante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
