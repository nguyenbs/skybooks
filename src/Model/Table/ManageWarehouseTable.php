<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class ManageWareHouseTable extends Table{

 	public function initialize(array $config){

	  $this->addBehavior('Timestamp');
	  $this->setTable('manage_warehouse');
	 
	}

}