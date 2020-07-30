<?php

class contact {

    public $name;
    public $email;
    public $phone;
    public $address;
    public $exp;
    public $dobday;
    public $dobmonth;
    public $dobyear;
    public $resume;
    public $avatar;


    function __construct($name,$email,$phone,$address,$exp,$dobday,$dobmonth,$dobyear,$resume,$avatar) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->exp = $exp;
        $this->dobday = $dobday;
        $this->dobmonth = $dobmonth;
        $this->dobyear = $dobyear;
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
    function get_dobday() {
        return $this->dobday;
    }
    function get_dobmonth() {
        return $this->dobmonth;
    }
    function get_dobyear() {
        return $this->dobyear;
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
    function add_dobday($dobday) {
        $this->dobday = $dobday;
    }
    function add_dobmonth($dobmonth) {
        $this->dobmonth = $dobmonth;
    }
    function add_dobyear($dobyear) {
        $this->dobyear = $dobyear;
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


    public function cal_age($dob){
        $currentyear = date("Y");
        $age = $currentyear - $dyear;
        return $age;
    } 

    public function sendMail() 
    {
        $errors = "";
        $admin = "benjaminlam1202@gmail.com";
        $admin =filter_var($admin, FILTER_SANITIZE_EMAIL);


        if(checkdate($this->get_dobmonth(), $this->get_dobday(), $this->get_dobyear()) == false){
            $errors .= '- Something wrong with yours birthday!<br />';
        }
        if ($this->get_name() == ""|| strlen($this->get_name()) > 30) {
            $errors .= '- Something wrong with yours name!<br />';
        }
        if ($this->get_email() == "" || strlen($this->get_email()) > 30) {
            $errors .= '- You forgot to enter a email!<br />';
        }
        if ($this->get_phone() == "" || strlen($this->get_phone()) > 30) {
            $errors .= '- You forgot to enter a phone!<br />';
        }

        if ($this->get_address() == "" || strlen($this->get_address()) > 1000) {
            $errors .= '- You forgot to enter an address!<br />';
        }

        if ($this->get_exp() == "" || strlen($this->get_exp()) > 2 || $this->get_exp() > $this->cal_age($this->get_dobyear())) {
            $errors .= '- Something wrong with yours exp!<br />';
        }


        if(empty($errors)) 
        {
            $headers  = "Name:         ".$this->get_name().PHP_EOL;
            $headers .= "Address:      ".$this->get_address().PHP_EOL;
            $headers .= "Experience:   ".$this->get_exp().PHP_EOL;
            $headers .= "Birth:        ".$this->get_dobday()."-".$this->get_dobmonth()."-".$this->get_dobyear().PHP_EOL;
            $headers .= "Resume url: ".""."<".$this->get_resume().">".PHP_EOL;
            $headers .= "Avatar url: ".""."<".$this->get_avatar().">".PHP_EOL;
            $headers .= "<".$this->get_email().">";
            $send_contact=mail("$this->admin","Submitted by "."$this->name","$headers","To: "."$this->admin","$this->name");
            if (!$send_contact) {
                echo "failed";

            }
            else {

            //echo "worked!!";
            //header("Location: thank.php");
            //exit;
            }
        } else 
        {
            echo '<p class=\'message error\'>';
            echo '<font color="black">' . $errors . '</font>';
            echo '</p><br />';
        }
    }

}
?>
