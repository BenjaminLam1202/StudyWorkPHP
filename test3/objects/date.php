<?php
include 'contact.php';
class date extends contact {


    public $dobday;
    public $dobmonth;
    public $dobyear;



    function __construct($name,$email,$phone,$address,$exp,$dobday,$dobmonth,$dobyear,$resume,$avatar) {
        parent::__construct($name,$email,$phone,$address,$exp,$resume,$avatar);
        $this->dobday = $dobday;
        $this->dobmonth = $dobmonth;
        $this->dobyear = $dobyear;

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

    function add_dobday($dobday) {
        $this->dobday = $dobday;
    }
    function add_dobmonth($dobmonth) {
        $this->dobmonth = $dobmonth;
    }
    function add_dobyear($dobyear) {
        $this->dobyear = $dobyear;
    }
    function __destruct() {
        /*
        echo "the dobday is {$this->dobday}, the dobmonth is {$this->dobmonth}, the dobyear is {$this->dobyear}"; */
    }



    public function sendMail() 
    {
        //$errors = "";
        $admin = "benjaminlam1202@gmail.com";
        $admin =filter_var($admin, FILTER_SANITIZE_EMAIL);
        $headers  = "Name:         ".$this->get_name().PHP_EOL;
        $headers .= "Address:      ".$this->get_address().PHP_EOL;
        $headers .= "Experience:   ".$this->get_exp().PHP_EOL;
        $headers .= "Birth:        ".$this->get_dobday()."-".$this->get_dobmonth()."-".$this->get_dobyear().PHP_EOL;
        $headers .= "Resume url:   "."".$resume.PHP_EOL;
        $headers .= "Avatar url:   "."".$avatar.PHP_EOL;
        $headers .= "<".$this->get_email().">";
        $send_contact=mail("$admin","Submitted by "."$this->name","$headers","To: "."$admin","$this->name");
        if (!$send_contact) {
            echo "failed";

        }
        else {

            //echo "worked!!";
            //header("Location: thank.php");
            //exit;
        }

    }

}
?>
