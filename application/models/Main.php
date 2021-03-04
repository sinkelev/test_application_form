<?php

namespace application\models;

use application\core\Model;


class Main extends Model {

    public function getForm(){
        $url_region = 'http://pos.gosuslugi.ru/filters';
        $region = json_decode(file_get_contents($url_region));
        $url_service = 'https://pos.gosuslugi.ru/inbox-service/subjects';
        $service = json_decode(file_get_contents($url_service));
        $url_type = 'https://pos.gosuslugi.ru/inbox-service/subsubjects/subject/116/region/22';
        $type = json_decode(file_get_contents($url_type));
        return array($region, $service, $type);
    }

    public function putForm($request) {
        $params = [
            'region' => $request['region'],
            'group' => $request['service'],
            'type' => $request['type'],
            'message' => $request['message'],
            'status' => 'В обработке',
        ];

        $this->db->query('INSERT INTO applications (region, "group", type, message, status) VALUES (:region, :group, :type, :message, :status)', $params);
    }

}