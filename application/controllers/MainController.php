<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;

class MainController extends Controller {

    public function indexAction() {

        if(isset($_POST["submit"])){
            $vars = [
                'region' => $_POST['region'],
                'service' => $_POST['service'],
                'type' => $_POST['type'],
                'message' => $_POST['message'],
            ];
            $this->model->putForm($vars);
            $this->view->redirect('applications');
        }

        $region = $this->model->getForm()[0];
        $service = $this->model->getForm()[1];
        $type = $this->model->getForm()[2];
        $vars = [
            'region' => $region,
            'service' => $service->content,
            'type' => $type->content,
        ];
        $this->view->render('Главная страница', $vars);

    }

    public function applicationsAction() {
        $pagination = new Pagination($this->route, $this->model->applicationsCount(), 5);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->applicationsList($this->route),
        ];
        $this->view->render('Заявки', $vars);
    }

    public function detailAction() {
        $vars = [
            'data' => $this->model->postData($this->route['id'])[0],
        ];
        $this->view->render('Заявка', $vars);
    }
}