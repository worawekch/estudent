<?php
class Users extends \Phalcon\Mvc\Model {
	public function getItems() {
		$items = array (
				"Chuethong",
				"Sakaeo",
				"Wangcc" 
		);
		return $items;
	}
}