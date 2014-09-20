<?php
namespace Course\Mapper;
interface CourseInterface
{
	public function findByName($name);
	public function findByUrl($url);
	public function findById($id);
	public function insert($course);
	public function update($course);
}