<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Participantehorarios Controller
 *
 * @property \App\Model\Table\ParticipantehorariosTable $Participantehorarios
 *
 * @method \App\Model\Entity\Participantehorario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParticipantehorariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Participantes', 'Horarios'],
        ];
        $participantehorarios = $this->paginate($this->Participantehorarios);

        $this->set(compact('participantehorarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Participantehorario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participantehorario = $this->Participantehorarios->get($id, [
            'contain' => ['Participantes', 'Horarios'],
        ]);

        $this->set('participantehorario', $participantehorario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participantehorario = $this->Participantehorarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $participantehorario = $this->Participantehorarios->patchEntity($participantehorario, $this->request->getData());
            if ($this->Participantehorarios->save($participantehorario)) {
                $this->Flash->success(__('The participantehorario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participantehorario could not be saved. Please, try again.'));
        }
        $participantes = $this->Participantehorarios->Participantes->find('list', ['limit' => 200]);
        $horarios = $this->Participantehorarios->Horarios->find('list', ['limit' => 200]);
        $this->set(compact('participantehorario', 'participantes', 'horarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Participantehorario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participantehorario = $this->Participantehorarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participantehorario = $this->Participantehorarios->patchEntity($participantehorario, $this->request->getData());
            if ($this->Participantehorarios->save($participantehorario)) {
                $this->Flash->success(__('The participantehorario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participantehorario could not be saved. Please, try again.'));
        }
        $participantes = $this->Participantehorarios->Participantes->find('list', ['limit' => 200]);
        $horarios = $this->Participantehorarios->Horarios->find('list', ['limit' => 200]);
        $this->set(compact('participantehorario', 'participantes', 'horarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Participantehorario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participantehorario = $this->Participantehorarios->get($id);
        if ($this->Participantehorarios->delete($participantehorario)) {
            $this->Flash->success(__('The participantehorario has been deleted.'));
        } else {
            $this->Flash->error(__('The participantehorario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
