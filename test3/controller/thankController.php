<?php 

function sendMail($name,$email,$phone,$address,$exp,$dobday,$dobmonth,$dobyear,$resume,$avatar) 
    {
        //$errors = "";
        $admin = "benjaminlam1202@gmail.com";
        $admin =filter_var($admin, FILTER_SANITIZE_EMAIL);
        $headers  = "Name:         ".$name.PHP_EOL;
        $headers .= "Address:      ".$address.PHP_EOL;
        $headers .= "Experience:   ".$exp.PHP_EOL;
        $headers .= "Birth:        ".$dobday."-".$dobmonth."-".$dobyear.PHP_EOL;
        $headers .= "Resume url:   "."".$resume.PHP_EOL;
        $headers .= "Avatar url:   "."".$avatar.PHP_EOL;
        $headers .= "<".$email.">";
        $send_contact=mail("$admin","Submitted by "."$name","$headers","To: "."$admin","$name");
        if (!$send_contact) {
            echo "failed";

        }
        else {

            //echo "worked!!";
            //header("Location: thank.php");
            //exit;
        }

    }


 ?>