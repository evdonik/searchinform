<?php
namespace App\Core;
use App\Db\Db;
abstract class Model {
    public $db;
    public function __construct() {
        $this->db = new Db;
    }
}
