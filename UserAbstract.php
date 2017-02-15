<?php
abstract class UserAbstract implements ISuperUser {
    abstract function showInfo();
    public $info;
    public $name;
    public $login;
    public $password;
    function getInfo(){
        $this->info["name"]=$this->name;
        $this->info["login"]=$this->login;
        $this->info["password"]=$this->password;
        var_dump($this->info);
    }
}