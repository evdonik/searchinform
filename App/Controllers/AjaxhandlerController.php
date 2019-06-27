<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Core\View;
class AjaxhandlerController extends Controller {
    private $postfunction;
    public function getAction() {
        if (isset($_POST['function'])) {
            $postfunction = $_POST['function'];
            if ($postfunction == "addList") {
                $data['title'] = $_POST['title'];
                $data['priority'] = $_POST['priority'];
                $data['tags'] = $_POST['tags'];
                $result = $this->model->$postfunction($data);
                return $result;
            }
            if ($postfunction == "getList") {
                $result = $this->model->$postfunction();
                echo $result;
            }
            if ($postfunction == "deleteTask") {
                $id = $_POST['id'];
                $result = $this->model->$postfunction($id);
                return $result;
            }
            if ($postfunction == "updateTask") {
                $data['uuid'] = $_POST['uuid'];
                $data['title'] = $_POST['title'];
                $data['priority'] = $_POST['priority'];
                $data['status'] = $_POST['status'];
                $data['tags'] = $_POST['tags'];
                $result = $this->model->$postfunction($data);
                return $result;
            }
        } else {
            View::errorCode(404);
        }
    }
}
