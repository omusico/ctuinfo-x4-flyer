<?php
namespace Course\Mapper;
interface CourseInterface
{
	public function findByName($name);
	public function findByUrl($url);
	public function findById($id);
	public function insert($module);
	public function update($module);
}