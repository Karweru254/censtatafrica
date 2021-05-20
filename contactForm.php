<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $to='info@censtatafrica.co.ke';
        $subject='Censtat Africa Consultancy Ltd';
        $message="Name: ".$name."\n"."Subject: ".$subject."\n". "Message: "."\n\n".$message;
        $headers="From: ".$email;
        
        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank you"." ".$name." ,We will contact you shortly!</h1>";
        }
        else{
            $errormessage= "Something went wrong";
        }
       

        
    }
?>