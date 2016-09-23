<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 9/16/16
 * Time: 4:43 PM
 */

class account{

    public $name;
    protected $password;
    public $DOB;
    protected $id;
    private $data = array();

    function __construct($accounts_name, $account_password, $account_DOB){
        $this->name = $accounts_name;
        $this->password = $account_password;
        $this->DOB = $account_DOB;
    }

    function __set($name, $id)
    {
        echo "Setting '$name' to '$id'\n";
        $this->data[$name] = $id;
    }

    public function __get($name)
    {
        echo ", Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    function get_password(){
        return $this->password;
    }


    function get_name(){
        return $this->name;
    }

}
class profile extends account {
    function __construct($accounts_name, $account_password, $account_DOB){
        parent::__construct($accounts_name, $account_password, $account_DOB);
    }
}

abstract class Account2{
    public $name;
    protected $password;
    public $DOB;
    protected $id;
    private $data = array();

    function get_name(){
        return $this->name;
    }

    public function describe(){
        echo $this->name. ' was born ' .$this->DOB;
    }
    abstract function givePass();
}

class aiden extends Account2{
    public function describe(){
        parent::describe();

    }
    public function givePass(){
        echo 'AidenPass';
    }
}

class bill extends Account2{
    public function describe(){
        parent::describe();

    }
    public function givePass(){
        echo 'BillPass';
    }
}

class frank extends Account2{
    public function describe(){
        parent::describe();

    }
    public function givePass(){
        echo 'FrankPass';
    }
}
?>