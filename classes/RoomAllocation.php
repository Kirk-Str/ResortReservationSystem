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

	public function delete($id = array()){

		if(!$this->_db->delete('room_allocation', $id)){
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


	//Selects only cleaned and vacant rooms
	public function selectAll($roomId = null){

		$select = 'SELECT room_allocation.room_no, room_allocation.room_id, room_allocation.door_no, room_allocation.room_status, room.room_name as room_type, room_reservation.reservation_id';
	
		$table = 'room_allocation INNER JOIN room ON (room_allocation.room_id = room.room_id) LEFT JOIN room_reservation ON room_reservation.room_id = room_allocation.room_id AND room_reservation.room_no = room_allocation.room_no';

		if($roomId){

			$where = array(
				array('room_allocation.room_id', '=', $roomId),
				'AND',
				array('room_allocation.room_status', '=', 1)
			);

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

	public function availableForSwapping($roomId, $roomNo){

		$select = 'SELECT room_allocation.room_no, room_allocation.room_id, room_allocation.door_no, room_allocation.room_status, room.room_name as room_type';
	
		$table = 'room_allocation INNER JOIN room ON (room_allocation.room_id = room.room_id)';

		$where = array(array('room_allocation.room_id', '=', $roomId),
					'AND',
					array('room_allocation.room_no', '<>', $roomNo),
					'AND',
					array('room_allocation.room_status', '=', 1)
				);

		$data = $this ->_db->action($select, $table, $where);

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