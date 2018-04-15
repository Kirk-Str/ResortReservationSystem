<?php
class RoomAllocation {

	private $_db,
			$_data;

	public function __construct($room = null) {
		$this->_db = DB::getInstance();
	}

	public function update($fields = array(), $id = array()){

		if(!$this->_db->update('roomAllocation',$id,$fields)){
			throw new Exception('There was a problem updating the record.');
		}
	}

	public function create($fields=array()){

		if (!$this->_db->insert('roomAllocation', $fields)){
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
				array('room_allocation.id', "=", $id),
				'AND',
				array('room_allocation.room_id', "=", $roomId)
			);

			$select = 'SELECT room_allocation.id, room_allocation.room_id, room_allocation.door_no, room_allocation.room_status, room.room_name';

			$table = 'room_allocation INNER JOIN room ON (room_allocation.room_id = room.room_id)';

			$data = $this ->_db->action($select, $table, $where);

			if($data->count()){
				$this->_data = $data->first();
				return $this->_data;
			}
		}

		return false;

	}

	public function selectAll(){
	
			$data = $this ->_db->get('room');

			if($data->count()){
				$this->_data = $data->results();
				return $this->_data;
			}

		return false;

	}


	public function getAllRooms(){
		
		$where = null;
		
		$select = 'SELECT R.room_id, R.room_name, R.thumbnail, R.caption, R.occupancy, R.total_room, COALESCE(R.total_room - B.Occupied, R.total_room) AS available, R.size, R.rate, R.view';
		
		$table = 'room AS R LEFT JOIN (SELECT COUNT(room_id) AS Occupied, room_id FROM room_reservation WHERE (room_reservation.check_in  >= \'' . $_check_in . '\' AND room_reservation.check_in <= \'' . $_check_out . '\') OR (room_reservation.check_in <= \'' . $_check_out . '\' AND room_reservation.check_out >= \'' . $_check_out . '\') OR (room_reservation.check_in >= \'' . $_check_in . '\' AND room_reservation.check_out <= \'' . $_check_out . '\') GROUP BY room_id) AS B ON (R.room_id = B.room_id) WHERE R.occupancy >= ' . $_occupancy . ' AND COALESCE(R.total_room - B.Occupied, R.total_room) > 0' ;

		$data = $this ->_db->action($select, $table);

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