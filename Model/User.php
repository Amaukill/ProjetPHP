<?php
Class User extends Model {
    protected $id;
    protected $name;
    protected $email;
    protected $mdp;
    protected $fields =["name","email","mdp"];
    public function __construct()
    {
    }

    public function setName ($name){
         $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }

   public function setEmail ($email){
    $this->email=$email;
    }
    public function getEmail(){
         return $this->email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

}
