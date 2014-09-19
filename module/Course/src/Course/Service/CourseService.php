<?php 
namespace Course\Service;

class CourseService implements CourseServiceInterface
{

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway ){
		$this->tableGateway = $tableGateway;
	}
	
	public function findAll()
	{
		
	}
	
	public function find($id)
	{
		
	}
	
	public function findByName($name)
	{
		
	}
	
	public function delete($id)
	{
		
	}
	
	public function save( $record)
	{
		
	}
}