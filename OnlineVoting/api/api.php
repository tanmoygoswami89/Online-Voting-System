<?php

    $connect = mysqli_connect('localhost','root','','voting') or die('connection error!');
    if(isset($_POST['registerbtn'])){

        $text = $_POST['text'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        
    }




?>