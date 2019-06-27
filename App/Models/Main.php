<?php
namespace App\Models;
use App\Core\Repository;
class Main extends Repository {
    public function getList() {
        $result = parent::getTaskList();
        return $result;
    }
}
