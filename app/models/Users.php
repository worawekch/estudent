<?php
class Users extends \Phalcon\Mvc\Model {
	public $id;
	public $user;
	public $email;
	public function getItems() {
		$items = array (
				"Chuethong",
				"Sakaeo",
				"Wangcc" 
		);
		return $items;
	}
}