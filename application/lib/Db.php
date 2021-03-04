<?php

namespace application\lib;

use PDO;

class Db {

    protected $db;

    function __construct() {
        $config = require 'application/config/db.php';
        try {
            $this->db = new PDO('sqlite:' . $config['name']);
        } catch (PDOException $e) {
                print "Error: " . $e->getMessage() . "<br/>";
            }
    }

    public function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                if (is_int($val)) {
                    $type = PDO::PARAM_INT;
                } else {
                    $type = PDO::PARAM_STR;
                }
                $stmt->bindValue(':'.$key, $val, $type);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

}