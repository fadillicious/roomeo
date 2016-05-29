<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $id;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 public function authenticate()
	 {
			 $user = User::model()->findByAttributes(['username'=>$this->username]);

			 if ($user == null) {
					 $this->errorCode=self::ERROR_USERNAME_INVALID;

			 } elseif (!password_verify($this->password, $user->password)) {
				 	$this->errorCode=self::ERROR_PASSWORD_INVALID;

			 } else {

					 $role = Role::model()->findByAttributes(['id'=>$user->role_id]);
					 
					 $this->id = $user->id;
					 $this->setState('role_id', $user->role_id);
					 $this->setState('role_code', $role->code);
					 $this->setState('role_name', $role->name);
					 $this->setState('username', $user->username);
					 $this->setState('name', $user->name);
					 $this->errorCode=self::ERROR_NONE;
			 }

			 return !$this->errorCode;
	 }

	 public function getId()
	 {
			 return $this->id;
	 }
}
