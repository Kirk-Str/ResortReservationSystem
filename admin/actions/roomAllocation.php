<?php

require '../../vendor/autoload.php';

if (Input::exists()){

	//if(Token::check(Input::get('token'))){

		$validate = new Validate();
		$validation = $validate->check($_POST,array(
			'room_id' => array(
				'required' => true,
			),
			"door_no" => array(
				'required' => true
			),
			'room_status' => array(
				'required' => true
			),
		)); 
		
			if($validation->passed()){

				$roomAllocation = new RoomAllocation();
				
				try{

					if(Input::get('type') == "add")
					{

						$roomAllocation->create(array(
							'room_id' => Input::get('room_id'),
							'door_no' => Input::get('door_no'), 
							'room_status' => Input::get('room_status'),
						));
					}
					else if(Input::get('type') == "edit")
					{
						
						$roomAllocation->update(array(
								'door_no' => Input::get('door_no'), 
								'room_status' => Input::get('room_status')),
								array('id' => Input::get('id'),
								'room_id' => Input::get('room_id'))
						);
						
					}
					else if(Input::get('type') == "delete")
					{
						$roomAllocation->delete(Input::get('id'));
					}

				} catch(Exception $e){
					die($e->getMessage());
				}

				Redirect::to(Config::get('application_path') . 'admin/roomAllocation.php');

			} else {
				foreach($validation->errors() as $error){
					echo $error, '<br>';
				}
			}
	//}

}

?>