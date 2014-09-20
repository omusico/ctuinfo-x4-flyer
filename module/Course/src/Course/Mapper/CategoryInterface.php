<?php
namespace Course\Mapper;
interface CategoryInterface
{
	public function findByName($name);
	public function findById($id);
	public function insert($category);
	public function update($category);
}