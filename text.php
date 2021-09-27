<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $to       = 'chamod224.nethma@gmail.com';
        $subject  = 'Testing sendmail.exe';
        $message  = 'Hi, you just received an email using sendmail!';
        $headers  = 'From: chamod224.nethma@gmail.com' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8';
        if(mail($to, $subject, $message, $headers))
            echo "Email sent";
        else
            echo "Email sending failed";
        
    
    
    ?>
</body>
</html>