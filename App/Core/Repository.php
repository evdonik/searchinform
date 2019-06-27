<?php
namespace App\Core;
use App\Core\Model;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
class Repository extends Model {
    private $uuid;
    public $title;
    public $priority;
    public $status;
    public $tags;
    private function getList() {
        $result = $this->db->row('
		SELECT HEX(inform_tasks.uuid) as uuid,inform_tasks.title,inform_tasks.tags,inform_status_list.title as status,inform_priority_list.title as priority FROM inform_tasks  
        left join inform_status_list on inform_status_list.status_id=inform_tasks.status  
        left join inform_priority_list on inform_priority_list.priority_id=inform_tasks.priority order by inform_tasks.status asc');
        return $result;
    }
    private function deleteTaskbyId($id) {
        $result = $this->db->row("
		DELETE FROM inform_tasks where uuid = UNHEX('$id')");
        return $result;
    }
    private function getListbyId($id) {
        $result = $this->db->row("
		SELECT HEX(uuid) as uuid,title,tags,status,priority FROM inform_tasks where uuid = UNHEX('$id')");
        return $result;
    }
    private function getStatusList() {
        $result = $this->db->row('
		SELECT * FROM `inform_status_list`');
        return $result;
    }
    private function getPriorityList() {
        $result = $this->db->row('
		SELECT * FROM `inform_priority_list`');
        return $result;
    }
    public function getTaskList() {
        $result = $this->getList();
        return $result;
    }
    public function ajaxGetTaskList() {
        $result = $this->getList();
        return json_encode($result);
    }
    public function addTaskModal() {
        $data['priority_list'] = $this->getPriorityList();
        return $data;
    }
    public function updateTaskModal($id) {
        $data = $this->getListbyId($id);
        foreach ($data as $item) {
            $dataar['uuid'] = $item['uuid'];
            $dataar['title'] = $item['title'];
            $dataar['tags'] = $item['tags'];
            $dataar['priority'] = $item['priority'];
            $dataar['status'] = $item['status'];
            $dataar['status_list'] = $this->getStatusList();
            $dataar['priority_list'] = $this->getPriorityList();
        }
        return $dataar;
    }
    public function deleteTask($id) {
        $result = $this->deleteTaskbyId($id);
        return $result;
    }
    public function updateTask($data) {
        $result = $this->updateTaskbyId($data);
        return $result;
    }
    public function updateTaskbyId($data) {
        $this->uuid = $data['uuid'];
        $this->title = $data['title'];
        $this->priority = $data['priority'];
        $this->tags = $data['tags'];
        $this->status = $data['status'];
        $sql = "UPDATE inform_tasks SET title='$this->title', priority='$this->priority', tags='$this->tags',status='$this->status' WHERE uuid=UNHEX('$this->uuid')";
        $result = $this->db->query($sql);
        return $result;
    }
    public function addList($data) {
        $this->uuid = Uuid::uuid4();
        $this->title = $data['title'];
        $this->priority = $data['priority'];
        $this->tags = $data['tags'];
        $this->status = 1;
        $params = array('uuid' => $this->stringGuidAsBinaryGuid($this->uuid), 'title' => $this->title, 'priority' => $this->priority, 'tags' => $this->tags, 'status' => $this->status);
        $result = $this->db->row("
	INSERT INTO inform_tasks (uuid, title, priority,tags,status) VALUES (:uuid,:title,:priority,:tags,:status)", $params);
        return $result;
    }
    private function stringGuidAsBinaryGuid($stringGuid) {
        $binary = pack("H*", str_replace('-', '', $stringGuid));
        return $binary;
    }
    private function binaryGuidAsStringGuid($binaryGuid) {
        $string = unpack("H*", $binaryGuid);
        $string = preg_replace("/([0-9a-f]{8})([0-9a-f]{4})([0-9a-f]{4})([0-9a-f]{4})([0-9a-f]{12})/", "$1-$2-$3-$4-$5", $string["1"]);
        return $string;
    }
}
