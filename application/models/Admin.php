<?php

namespace application\models;

use application\core\Model;

use PDO;


class Admin extends Model {

    public function editForm($request, $id) {
        $params = [
            'id' => $id,
            'status' => $request['status'],
        ];
        $this->db->query('UPDATE applications SET status = :status WHERE id = :id', $params);
    }

    public function loginForm($request) {
        $params = [
            'login' => $request['login'],
            'password' => $request['password'],
        ];

        $result = $this->db->query("SELECT * FROM USERS WHERE login = :login and password = :password", $params);
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            echo "Пользователь не найден";
            exit();
        }

        setcookie('user', $user['status'], time() + 3600, "/");
    }
}