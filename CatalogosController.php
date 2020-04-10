<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Catalogos Controller
 *
 * @property \App\Model\Table\CatalogosTable $Catalogos
 *
 * @method \App\Model\Entity\Catalogo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatalogosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actividades', 'Eventos'],
        ];
        $catalogos = $this->paginate($this->Catalogos);

        $this->set(compact('catalogos'));
    }

    /**
     * View method
     *
     * @param string|null $id Catalogo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catalogo = $this->Catalogos->get($id, [
            'contain' => ['Actividades', 'Eventos', 'Horarios', 'Pagodetalles'],
        ]);

        $this->set('catalogo', $catalogo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catalogo = $this->Catalogos->newEmptyEntity();
        if ($this->request->is('post')) {
            $catalogo = $this->Catalogos->patchEntity($catalogo, $this->request->getData());
            if ($this->Catalogos->save($catalogo)) {
                $this->Flash->success(__('The catalogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalogo could not be saved. Please, try again.'));
        }
        $actividades = $this->Catalogos->Actividades->find('list', ['limit' => 200]);
        $eventos = $this->Catalogos->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('catalogo', 'actividades', 'eventos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Catalogo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catalogo = $this->Catalogos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catalogo = $this->Catalogos->patchEntity($catalogo, $this->request->getData());
            if ($this->Catalogos->save($catalogo)) {
                $this->Flash->success(__('The catalogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalogo could not be saved. Please, try again.'));
        }
        $actividades = $this->Catalogos->Actividades->find('list', ['limit' => 200]);
        $eventos = $this->Catalogos->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('catalogo', 'actividades', 'eventos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Catalogo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catalogo = $this->Catalogos->get($id);
        if ($this->Catalogos->delete($catalogo)) {
            $this->Flash->success(__('The catalogo has been deleted.'));
        } else {
            $this->Flash->error(__('The catalogo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
