   <?php
    
    if (isset($_POST['name']) && isset($_POST['email'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $to = 'nymark@live.dk';
        $subject = "New Subscriber";

        // Body delen mangler her
        
        // Headers 
        
        $headers = "From: ".$name" <".@email.">\r\n";
        $headers .= "Reply-To: ".@mail.">\r\n";
        $headers .= "MIME-Version: 1.0.\r\n";
        $headers .= "content-type: text/html; charset-utf-8";
        
        // SEND
        
        $send = mail($to, $subject, $headers);
        if ($send) {
            
            echo '<br>';
            echo 'Thanks bla bla bla';
        
        }
        
        else {
            echo 'error';
        }
        
    }
    
    ?>