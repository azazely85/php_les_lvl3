<?php
interface  ISuperUser{
    function getInfo();
}
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
class User extends UserAbstract {
    function __construct($name,$login,$password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
        $this->showInfo();
        $this->getInfo();
    }
    function showInfo(){
        echo "Name: ".$this->name."<br/>";
        echo "Login: ".$this->login."<br/>";
        echo "Password: ".$this->password."<br/>";
        echo "<hr>";
    }
}
$user1 = new User("Ivan","ivan2","123456");
$user2 = new User("Petro","petr2","123456");
$user3 = new User("Mark","mark85","123456");

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

$user4=new SuperUser("Ivan","ivan2","123456","admin");