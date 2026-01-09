<?php
class Controller {
    public function view($view, $data = []) {
        extract($data);
        require_once 'views/layouts/header.php';
        require_once 'views/' . $view . '.php';
        require_once 'views/layouts/footer.php';
    }

    public function model($model) {
        require_once 'app/Models/' . $model . '.php';
        return new $model;
    }
}
