<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;

class AdminController extends Controller {

    public function loginAction() {
        if(isset($_POST["submit"])){
            $vars = [
                'login' => $_POST['login'],
                'password' => $_POST['password'],
            ];
            $this->model->loginForm($vars);
            $this->view->redirect('admin/applications');
        }
        $this->view->render('Вход');
    }

    public function applicationsAction()
    {
        $pagination = new Pagination($this->route, $this->model->applicationsCount(), 5);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->applicationsList($this->route),
        ];
        if ($_COOKIE['user'] == 'admin') {
            $this->view->render('Admin.Заявки', $vars);
        }else {
            $this->view->redirect('login');
        }
    }

    public function editAction() {

        if(isset($_POST["submit"])){
            $vars = [
                'status' => $_POST['status'],
            ];
            header("Location: ".$_SERVER['REQUEST_URI']);
            $this->model->editForm($vars, $this->route['id']);
        }

        $vars = [
            'data' => $this->model->postData($this->route['id'])[0],
        ];
        if ($_COOKIE['user'] == 'admin') {
            $this->view->render('Admin.Заявка', $vars);
        }else {
            $this->view->redirect('login');
        }
    }
}