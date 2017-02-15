<?php
class SuperUser extends User
{
    public $role;

    function __construct($name, $login, $password, $role){
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    function showInfo(){
        echo "Role: ".$this->role."<br/>";
        parent::showInfo();
    }
}