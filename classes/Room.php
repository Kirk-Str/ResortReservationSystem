<?php
class Room {

	private $_db,
			$_data;

	public function __construct($room = null) {
		$this->_db = DB::getInstance();
	}

	public function update($fields = array(),$id=null){

		if(!$this->_db->update('room',$id,$fields)){
			throw new Exception('There was a problem updating the record.');
		}
	}

	public function create($fields=array()){

		if (!$this->_db->insert('room', $fields)){
			throw new Exception('There was a problem creating the the record.');
		}
		
	}

	public function delete($id){

		if(!$this->_db->delete('room',array('room_id', '=', $id))){
			throw new Exception('There was a problem deleting the record.');
		}
		
	}

	public function find($room){

		if(!is_null($room)){
			$field = 'room_id';
			$data = $this ->_db->get('room',array($field, "=", $room));

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


	public function getAvailableRooms($checkIn, $checkOut, $occupancy){
		
		$_check_in = (new DateTime($checkIn))->format('Y-m-d');
		$_check_out = (new DateTime($checkOut))->format('Y-m-d');
		$_occupancy = $occupancy;

		$where = null;
		

		SELECT R.room_id, R.room_name, R.thumbnail, R.caption, R.occupancy, COUNT(RX.room_id) AS TotalRoom, COUNT(room_id) - IFNULL(RX.Count, 0) AS AvaiableRoom, R.size, R.rate, R.view FROM room_allocation AS A INNER JOIN R room USING (room_id) LEFT JOIN (
			SELECT room_id, COUNT(room_id) AS Count FROM room_reservation 
			WHERE (room_reservation.check_in  >= '2018-04-24' AND room_reservation.check_in <= '2018-04-26') 
			OR (room_reservation.check_in <= '2018-04-26' AND room_reservation.check_out >= '2018-04-26') 
			OR (room_reservation.check_in >= '2018-04-24' AND room_reservation.check_out <= '2018-04-26')
			) AS RX USING (room_id) GROUP BY room_id
			

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