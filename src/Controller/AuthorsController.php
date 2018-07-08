<?php
namespace App\Controller;

use App\Controller\AppController;

class AuthorsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            "limit" => 5,
            "order" =>["id" => "ASC"],
        ];
        $authors = $this->paginate($this->Authors);
        $this->set(compact('authors'));
    }
    
    public function add()
    {
        $author = $this->Authors->newEntity();
        if($this->request->is('post')){
            $author = $this->Authors->patchEntity($author, $this->request->data);
            if($this->Authors->save($author)){
                $this->Flash->success(__('著者を新規登録しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('著者の新規登録に失敗しました'));
        }
        $this->set(compact('author'));
    }
    
    public function view($id = null)
    {
        $author = $this->Authors->get($id, [
            'contain' => ['Books']
        ]);
        $this->set('author' , $author);
    }
    
     public function edit($id = null)
    {
        $author = $this->Authors->get($id, [
            'contain' => []
        ]);
        if($this->request->is(['patch' , 'post' , 'put'])) {
            $author = $this->Authors->patchEntity($author, $this->request->data);
            if($this->Authors->save($author)){
                $this->Flash->success(__('著者を更新しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('著者の更新に失敗しました'));
        }
        $this->set(compact('author'));
    }   
    
}