<?php
class RoomAllocation {

	private $_db,
			$_data;

	public function __construct($room = null) {
		$this->_db = DB::getInstance();
	}

	public function update($fields = array(), $id = array()){

		if(!$this->_db->update('room_allocation',$id,$fields)){
			throw new Exception('There was a problem updating the record.');
		}
	}

	public function create($fields=array()){

		if (!$this->_db->insert('room_allocation', $fields)){
			throw new Exception('There was a problem creating the the record.');
		}
		
	}

	public function delete($id){

		if(!$this->_db->delete('roomAllocation',array('room_id', '=', $id))){
			throw new Exception('There was a problem deleting the record.');
		}
		
	}

	public function find($id, $roomId){

		if(!is_null($id) && !is_null($roomId)){

			$where = array(
				array('room_allocation.room_no', "=", $id),
				'AND',
				array('room_allocation.room_id', "=", $roomId)
			);

			$select = 'SELECT room_allocation.room_no, room_allocation.room_id, room_allocation.door_no, room_allocation.room_status, room.room_name';

			$table = 'room_allocation INNER JOIN room ON (room_allocation.room_id = room.room_id)';

			$data = $this ->_db->action($select, $table, $where);

			if($data->count()){
				$this->_data = $data->first();
				return $this->_data;
			}
		}

		return false;

	}

	public function selectAll($roomTypeId = null){

		$select = 'SELECT room_allocation.room_no, room_allocation.room_id, room_allocation.door_no, room_allocation.room_status, room.room_name as room_type';
	
		$table = 'room_allocation INNER JOIN room ON (room_allocation.room_id = room.room_id)';

		if($roomTypeId){

			$where = array('room_allocation.room_id', '=', $roomTypeId);

			$data = $this ->_db->action($select, $table, $where);

		}else{

			$data = $this ->_db->action($select, $table);

		}

		if($data->count()){
			$this->_data = $data->results();
			return $this->_data;
		}

		return false;

	}

	public function data(){
		return $this->_data;
	}

	public function transactBegin(){
		$this->_db->transactBegin();
	}

	public function transactCommit(){
		$this->_db->transactCommit();
	}

	public function transactRollback(){
		$this->_db->transactRollback();
	}

}