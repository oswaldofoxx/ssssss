<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Details Controller
 *
 * @property \App\Model\Table\DetailsTable $Details
 *
 * @method \App\Model\Entity\Detail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Factures', 'Replacements']
        ];
        $details = $this->paginate($this->Details);

        $this->set(compact('details'));
    }

    /**
     * View method
     *
     * @param string|null $id Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detail = $this->Details->get($id, [
            'contain' => ['Factures', 'Replacements']
        ]);

        $this->set('detail', $detail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detail = $this->Details->newEntity();
        if ($this->request->is('post')) {
            $detail = $this->Details->patchEntity($detail, $this->request->getData());
            if ($this->Details->save($detail)) {
                $this->Flash->success(__('The detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detail could not be saved. Please, try again.'));
        }
        $factures = $this->Details->Factures->find('list', ['limit' => 200]);
        $replacements = $this->Details->Replacements->find('list', ['limit' => 200]);
        $this->set(compact('detail', 'factures', 'replacements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detail = $this->Details->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detail = $this->Details->patchEntity($detail, $this->request->getData());
            if ($this->Details->save($detail)) {
                $this->Flash->success(__('The detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detail could not be saved. Please, try again.'));
        }
        $factures = $this->Details->Factures->find('list', ['limit' => 200]);
        $replacements = $this->Details->Replacements->find('list', ['limit' => 200]);
        $this->set(compact('detail', 'factures', 'replacements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detail = $this->Details->get($id);
        if ($this->Details->delete($detail)) {
            $this->Flash->success(__('The detail has been deleted.'));
        } else {
            $this->Flash->error(__('The detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
