<?php

namespace application\core;

use application\lib\Db;

abstract class Model {

    public $db;

    public function __construct() {
        $this->db = new Db;
    }

    public function applicationsCount() {
        return $this->db->column('SELECT COUNT(id) FROM applications');
    }

    public function applicationsList($route) {
        $max = 5;
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM applications ORDER BY id DESC LIMIT :start, :max', $params);
    }

    public function postData($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->row('SELECT * FROM applications WHERE id = :id', $params);
    }
}