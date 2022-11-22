<?php
    session_start();
    require_once"config.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if($connection -> connect_errno == 0) {
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");

        $sql = "SELECT * FROM users WHERE email='$userEmail' AND password='$userPassword'";
       
        if($result = $connection -> query($sql)) {

            if($result -> num_rows > 0) {
                
                $data = $result -> fetch_assoc();
                $user = $data['user'];
                $email = $data['email'];
                $_SESSION['signedIn'] = true;
                unset($_SESSION['signInError']);
                header('Location: index.php');

                $result -> close();
            } else {
                header('Location: signInPage.php');
                $_SESSION['signInError'] = true;
            }
        }

        $connection -> close();
    }
?>