<?php

require_once _MODELS . '/PDOModel.php';

class CategoriesModel extends PDOModel {
    public function __construct($host, $dbName, $login, $password) {
        parent::__construct($host, $dbName, $login, $password);
    }

    public function getCategories() {
        $q = "SELECT name AS label, id FROM category";
        return $this->select($q);
    }
}