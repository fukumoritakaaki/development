<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Book extends \Cake\ORM\Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}