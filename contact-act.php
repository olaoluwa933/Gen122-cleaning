<?php

if(isset($_POST['application'])){
    if(!empty($_POST['name']) && !empty($_POST['com-name']) && !empty($_POST['email']) && !empty($_POST['tel-num']) && !empty($_POST['option'])){
        $name = $_POST['name'];
        $com_name = $_POST['com-name'];
        $email = $_POST['email'];
        $tel = $_POST['tel-num'];
        $option = $_POST['option'];
        $specs = $_POST['specs'];
        $subject = "Cleaning Request From: ".$name;
        $headers = "From".$email;
        $to = "olaoluwa933@gmail.com";
        $c = count($option);
        for($x = 0; $x < $c; $x++){
            if(isset($message)){
                $message .= "$option[$x] \n";
            }else{
                $message = "$option[$x] \n";
            }
        }
        if(!empty($specs)){
            $formcontent="From: $name \n Company: $com_name \n Telephone Number: $tel \n Options for cleaning: $message Other Specifications: $specs";
        }else{
            $formcontent="From: $name \n Company: $com_name \n Telephone Number: $tel \n Options for cleaning: $message";
        }
        if(mail($to,$subject,$formcontent,$headers)){
            header('location: contact.php?success=Mail Sent Successfully.');
        }else{
            header('location: contact.php?error=Mail did not send, There was an error.');
        }

    }else{
        header('location: contact.php?error=Please fill in all fields.');
    }

}

if(isset($_POST['contact'])){
    if(!empty($_POST['cname']) && !empty($_POST['ccom-name']) && !empty($_POST['cemail']) && !empty($_POST['ctel-num'])){
        $name = $_POST['cname'];
        $com_name = $_POST['ccom-name'];
        $email = $_POST['cemail'];
        $tel = $_POST['ctel-num'];
        $subject = "Requesting A Call Back:";
        $headers = "From".$email;
        $to = "olaoluwa933@gmail.com";
        if(mail($to,$subject,$formcontent,$headers)){
            header('location: contact.php#cont-fot?success=Mail Sent Successfully.');
        }else{
            header('location: contact.php#cont-fot?error=Mail did not send, There was an error.');
        }
    }else{
        header('location: contact.php#cont-fot?error=Please fill in all fields.');
    }
}


?>