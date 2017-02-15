<?php
function __autoload($name){
    require "$name.php";
}
$user1 = new User("Ivan","ivan2","123456");
$user2 = new User("Petro","petr2","123456");
$user3 = new User("Mark","mark85","123456");

$user4=new SuperUser("Ivan","ivan2","123456","admin");