<?php
namespace App\Controller;

use App\Controller\AppController;

class BooksController extends AppController
{
    public function index(){
        $this->paginate = [
            'contain' => ['Authors', 'Categories'],
            'limit' => 5,
            'order' =>['id' => "ASC"],
        ];
        $books = $this->paginate($this->Books);
        $this->set(compact('books'));
    }
    
    public function add()
    {
        $book = $this->Books->newEntity();
        if($this->request->is('post')){
            $book = $this->Books->patchEntity($book, $this->request->data);
            if($this->Books->save($book)){
                $this->Flash->success(__('新規登録しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('登録に失敗しました'));
        }
        $authors = $this->Books->Authors->find('list');
        $categories = $this->Books->Categories->find('list');
        $this->set(compact('book', 'authors', 'categories'));
    }
    
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Books']
        ]);
        $this->set('category' , $category);
    }

    public function edit($id = null)
    {
        $book = $this->Books->get($id);
        if($this->request->is(['patch' , 'post' , 'put'])) {
            $book = $this->Books->patchEntity($book, $this->request->data);
            if($this->Books->save($book)){
                $this->Flash->success(__('更新しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('更新に失敗しました'));
        }
        $authors = $this->Books->Authors->find('list');
        $categories = $this->Books->Categories->find('list');
        $this->set(compact('book', 'authors', 'categories'));
    }
    
}
