<?php
class UserModel extends ModelCore{
	private $idUser;
	private $libUser;
	private $email;
	private $password;



	//METHODS
	public function save(){
		UserDao::add($this);
	}



    /**
     * Get the value of Id User 
     * 
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
 
    /** 
     * Set the value of Id User 
     * 
     * @param mixed idUser
     * 
     * @return self
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
 
        return $this;
    }
 
    /**
     * Get the value of Lib User 
     * 
     * @return mixed
     */
    public function getLibUser()
    {
        return $this->libUser;
    }
 
    /** 
     * Set the value of Lib User 
     * 
     * @param mixed libUser
     * 
     * @return self
     */
    public function setLibUser($libUser)
    {
        $this->libUser = $libUser;
 
        return $this;
    }
 
    /**
     * Get the value of Email 
     * 
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
 
    /** 
     * Set the value of Email 
     * 
     * @param mixed email
     * 
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
 
        return $this;
    }
 
    /**
     * Get the value of Password 
     * 
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
 
    /** 
     * Set the value of Password 
     * 
     * @param mixed password
     * 
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
 
        return $this;
    }
 
}