<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AuthorsTable extends Table
{
    
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->table('authors');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->hasMany('Books', [
            'foreignKey' => 'author_id',
        ]);
    }
    
    public function validationDefault(Validator $validator)
    {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');
        
        $validator
                ->notEmpty('name');
        
        return $validator;
    }
}