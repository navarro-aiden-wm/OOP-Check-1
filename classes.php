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

    function __construct($accounts_name, $account_password, $account_DOB){
        $this->name = $accounts_name;
        $this->password = $account_password;
        $this->DOB = $account_DOB;
    }


    function get_password(){
        return $this->password;
    }


    function get_name(){
        return $this->name;
    }
}
?>