<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriesController extends AppController
{
    public function index(){
        $this->paginate = [
            "limit" => 5,
            "order" => ["id" => "ASC"]
        ];
        $categories = $this->paginate($this->Categories);
        
        
        $this->set(compact('categories'));
    }
    
    public function add()
    {
        $category = $this->Categories->newEntity();
        if($this->request->is('post')){
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if($this->Categories->save($category)){
                $this->Flash->success(__('カテゴリを新規登録しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('カテゴリの新規登録に失敗しました'));
        }
        $this->set(compact('category'));
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
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if($this->request->is(['patch' , 'post' , 'put'])) {
            $author = $this->Categories->patchEntity($category, $this->request->data);
            if($this->Categories->save($category)){
                $this->Flash->success(__('カテゴリを更新しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('カテゴリの更新に失敗しました'));
        }
        $this->set(compact('category'));
    }

}