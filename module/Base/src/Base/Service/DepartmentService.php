<?php 
namespace Base\Service;

use Base\Entity\Department;
use Zend\Db\TableGateway\TableGateway;
use Zend\Stdlib\Hydrator\ClassMethods;


class DepartmentService implements DepartmentServiceInterface{
	protected $tableGateway;
	public function __construct(TableGateway $tableGateway ){
		$this->tableGateway = $tableGateway;
	}
	
	public function findAll()
	{
		$records = $this->tableGateway->select();
		return $records;
	}
	
	public function delete($id)
	{
		$this->tableGateway->delete(array(
				'id' => $id
		));
	}
	
	
	public function save(\Base\Entity\Department $record){
		$hydrator = new ClassMethods(true);
	}
}