<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Horarios Controller
 *
 * @property \App\Model\Table\HorariosTable $Horarios
 *
 * @method \App\Model\Entity\Horario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HorariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Catalogos', 'Ponentes'],
        ];
        $horarios = $this->paginate($this->Horarios);

        $this->set(compact('horarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Horario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $horario = $this->Horarios->get($id, [
            'contain' => ['Catalogos', 'Ponentes', 'Horariodetalles', 'Participantehorarios'],
        ]);

        $this->set('horario', $horario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $horario = $this->Horarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $horario = $this->Horarios->patchEntity($horario, $this->request->getData());
            if ($this->Horarios->save($horario)) {
                $this->Flash->success(__('The horario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horario could not be saved. Please, try again.'));
        }
        $catalogos = $this->Horarios->Catalogos->find('list', ['limit' => 200]);
        $ponentes = $this->Horarios->Ponentes->find('list', ['limit' => 200]);
        $this->set(compact('horario', 'catalogos', 'ponentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Horario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $horario = $this->Horarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $horario = $this->Horarios->patchEntity($horario, $this->request->getData());
            if ($this->Horarios->save($horario)) {
                $this->Flash->success(__('The horario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horario could not be saved. Please, try again.'));
        }
        $catalogos = $this->Horarios->Catalogos->find('list', ['limit' => 200]);
        $ponentes = $this->Horarios->Ponentes->find('list', ['limit' => 200]);
        $this->set(compact('horario', 'catalogos', 'ponentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Horario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $horario = $this->Horarios->get($id);
        if ($this->Horarios->delete($horario)) {
            $this->Flash->success(__('The horario has been deleted.'));
        } else {
            $this->Flash->error(__('The horario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
