<?php
namespace App\Models;
use App\Core\Repository;
class Ajaxhandler extends Repository {
    public function getList() {
        $result = parent::ajaxGetTaskList();
        return $result;
    }
    public function addList($data) {
        $result = parent::addList($data);
        return $result;
    }
    public function deleteTask($id) {
        $result = parent::deleteTask($id);
        return $result;
    }
    public function updateTask($data) {
        $result = parent::updateTask($data);
        return $result;
    }
}
