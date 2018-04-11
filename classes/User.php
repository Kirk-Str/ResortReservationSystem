<?php

//Role 0 disabled, Role 1 Admin, Role 2 User, Role 3 Guest.

class User {
	
	private $_db,
			$_data,
			$_sessionName,
			$_username,
			$_cookieName,
			$_isLoggedIn;

	public function __construct($user = null) {

		$this->_db = DB::getInstance();
		
		$this->_sessionName = Config::get('session/session_name');
		$this->_cookieName = Config::get('remember/cookie_name');

		if(!$user){

			if(Session::exists($this->_sessionName)){
				$user = Session::get($this->_sessionName);
				if($this->find($user)){
					$this->_isLoggedIn = true;
				} else {
					// process logout
				}

			}
		} else {
			$this->find($user);
		}

	}

	public function update($fields = array(),$id=null){

		if(!$id && $this->isLoggedIn()){
			$id=$this->data()->user_id; 
		}

		if(!$this->_db->update('user',$id , $fields)){
			throw new Exception('There was a problem updating.');
		}
	}

	public function create($fields=array()){
		
		if (!$this->_db->insert('user', $fields)){
			throw new Exception('There was a problem creating the account.');
		}

		return $this->_db->lastInsertId();
	}


	//Function takes argument as UserId, Email Id or specific field level filter
	public function find($user=null){

		if($user){

			if(is_array($user)){
				
				$data = $this ->_db->get('user', $user);

				if($data->count()){
					$this->_data = $data->first();
					return true;
				}

			}else{

				$field = (is_numeric($user)) ? 'user_id' : 'email_id';
				
				$data = $this ->_db->get('user', array($field, '=', $user));

				if($data->count()){
					$this->_data = $data->first();
					return $this->_data;
				}

			}

		}

		return false;

	}

	public function hasPermission($key) {
		$group = $this->_db->get('groups',array('id','=',$this->data()->group));
		//print_r($group->first());

		if ($group->count()){
		  $permissions = json_decode($group->first()->permissions,true);

			//print_r($permissions);

		  if($permissions[$key] == true){
		  	return true;
		  }

		}

		return false;
	}

	public function login($emailId = null,$password = null, $remember = false){
		
		$user = $this->find($emailId);

		if(!$emailId && !$password && $this->exists()){
			// log user in 
			Session::put($this->_sessionName,$this->data()->user_id);
			Session::put('username',$this->data()->firstname . ' ' . $this->data()->lastname);
			
		} else {

		//print_r($this->_data);
			if ($user){

				if($this->data()->password === Hash::make($password, $this->data()->salt)){
					
					Session::put($this->_sessionName,$this->data()->user_id);
					Session::put('username',$this->data()->firstname . ' ' . $this->data()->lastname);
					Session::put('user_id',$this->data()->user_id);
					
						if($remember){

							$hash = Hash::unique();
							$hashCheck = $this->_db->get('user_session', array('user_id', '=', $this->data()->user_id));
							if(!$hashCheck->count()){
									
								$this->_db->insert('user_session', array(
									'user_id' => $this->data()->user_id,
									'hash' => $hash
									));
							}else{
								$hash = $hashCheck->first()->hash;
							}
							Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
						}
						return true;
					//echo 'OK!';
				}
			}

			return false;

		}

	}


	public function listUsers($type = null){

		$where = null;
		
		$select = 'SELECT user_id, email_id, password, salt, firstname, lastname, address_line_one, address_line_two, city, country, contact_no, CASE WHEN role = 1 THEN \'Admin User\' WHEN role = 2 THEN \'Registered User\' WHEN role = 3 THEN \'Non-Registered User\' ELSE \'Deactivated\' END AS user_role,  avatar_image';

		$table = 'user';

		if($type == null){

			$data = $this ->_db->action($select, $table);

		}
		else if($type === 'registered'){

			$where = array('user.role',  '=',  2);
			$data = $this ->_db->action($select, $table, $where);

		}else if($type === 'admin'){

			$where = array('user.role',  '=',  1);
			$data = $this ->_db->action($select, $table, $where);

		}else if($type === 'non-registered'){

			$where = array('user.role',  '=',  3);
			$data = $this ->_db->action($select, $table, $where);


		}
		else if($type === 'deactivated'){

			$where = array('user.role',  '=',  0);
			$data = $this ->_db->action($select, $table, $where);

		}
		
		if($data->count()){
			$this->_data = $data->results();
			return $this->_data;
		}

		return false;

	}

	public function exists(){
		return (!empty($this->_data)) ? true : false;
	}

	public function logout(){

		$this->_db->delete('user_session',array('user_id','=',$this->data()->user_id));
		Session::delete($this->_sessionName);
		Session::kill();
		Cookie::delete($this->_cookieName);

	} 

	public function data(){
		return $this->_data;
	}

	public function isLoggedIn(){
		return $this->_isLoggedIn;
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