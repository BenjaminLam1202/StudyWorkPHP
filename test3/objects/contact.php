<?php

class contact {

    public $name;
    public $email;
    public $phone;
    public $address;
    public $exp;
    public $resume;
    public $avatar;


    function __construct($name,$email,$phone,$address,$exp,$resume,$avatar) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->exp = $exp;
        $this->resume = $resume;
        $this->avatar = $avatar;
    }
    function get_name() {
        return $this->name;
    }
    function get_email() {
        return $this->email;
    }
    function get_phone() {
        return $this->phone;
    }
    function get_address() {
        return $this->address;
    }
    function get_exp() {
        return $this->exp;
    }
    function get_resume() {
        return $this->resume;
    }
    function get_avatar() {
        return $this->avatar;
    }
    function add_name($name) {
        $this->name = $name;
    }
    function add_email($email) {
        $this->email = $email;
    }
    function add_phone($phone) {
        $this->phone = $phone;
    }
    function add_address($address) {
        $this->address = $address;
    }
    function add_exp($exp) {
        $this->exp = '$exp';
    }
    function add_resume($resume) {
        $this->resume = $resume;
    }
    function add_avatar($avatar) {
        $this->avatar = $avatar;
    }
    function __destruct() {
        /*
        echo "The firstname is {$this->firstname} , the lastname is {$this->lastname} , the email is {$this->emai} , the phone is {$this->phone}, the address is {$this->address}, the exp is {$this->exp}, the dobday is {$this->dobday}, the dobmonth is {$this->dobmonth}, the dobyear is {$this->dobyear}, the resume is {$this->resume}, the avatar is {$this->avatar} ."; */
    }


}
?>
