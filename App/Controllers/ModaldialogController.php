<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Core\View;
class ModaldialogController extends Controller {
    private $postfunction;
    public function getmodalAction() {
        if (isset($_POST['function'])) {
            $postfunction = $_POST['function'];
            if ($postfunction == "addTaskModal") {
                $result = $this->model->$postfunction();
                $priority_list = $result;
                $this->view->rendermodal('SearchInform', $priority_list, $postfunction);
            }
            if ($postfunction == "updateTaskModal") {
                $id = $_POST['id'];
                $result['data'] = $this->model->$postfunction($id);
                $this->view->rendermodal('SearchInform', $result, $postfunction);
            }
        }
		else{
		View::errorCode(404);
		}
    }
}
