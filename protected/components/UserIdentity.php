<?php

/**
* UserIdentity represents the data needed to identity a user.
* It contains the authentication method that checks if the provided
* data can identity the user.
*/
class UserIdentity extends CUserIdentity
{

	// store the user's ID:
	    private $_id;
	/**
	 * Authenticates a user.
	 */
	public function authenticate()
	{
		$user = Staff::model()->findByAttributes(array('username'=>$this->username));
		
		if ($user===null) { // No user found!
		    $this->errorCode=self::ERROR_USERNAME_INVALID;
		} else if ($user->password !== $this->password) { // Invalid password!
		    $this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else { // Okay!
		    $this->errorCode=self::ERROR_NONE;
		    // Store the role in a session:
		    $this->setState('role', $user->role);
		    $this->_id = $user->id;
		}
		return !$this->errorCode;
	}
	
	public function getId()
	{
	 	return $this->_id;
	}
}
