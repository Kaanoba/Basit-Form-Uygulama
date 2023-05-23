<?php

    
    if (!$_POST) {
        echo 'Wrong Page';
    } else{
        
        if(!$_POST['Fname']){
            echo 'Fname is empty!';
        } else {
            $fname = $_POST['Fname'];
        }

        if (!$_POST['mail']) {
            echo 'Mail is empty!';
        } else {
            $mail = $_POST['mail'];
        }

        if (!$_POST['subject']) {
            echo 'Subject is empty';
        } else {
            $subject = $_POST['subject']; 
        }

        if (!$_POST['comments']) {
            echo 'Comment is empty!';
        } else {
            $comments = $_POST['comments'];
        }
        

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #table{
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        #table td, th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #table td{
            text-align: center;
        }
        
    </style>
</head>
<body>
        <?php if(isset($_POST['submit'])) { ?>
            <table id="table">
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Comments</th>
                </tr>
                <tr>
                    <td><?= $fname?></td>
                    <td><?= $mail?></td>
                    <td><?= $subject?></td>
                    <td><?= $comments?></td>
                </tr>
            
            </table>
        <?php }?>
</body>
</html>