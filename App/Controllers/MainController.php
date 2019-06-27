<?php
namespace App\Controllers;
use App\Core\Controller;
class MainController extends Controller {
    public function indexAction() {
        $result = $this->model->getList();
        $vars = ['list' => $result, ];
        $this->view->render('SearchInform', $vars);
    }
}
