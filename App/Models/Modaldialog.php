<?php
namespace App\Models;
use App\Core\Repository;
class Modaldialog extends Repository {
    public function addTaskModal() {
        $result = parent::addTaskModal();
        return $result;
    }
    public function updateTaskModal($id) {
        $result = parent::updateTaskModal($id);
        return $result;
    }
}