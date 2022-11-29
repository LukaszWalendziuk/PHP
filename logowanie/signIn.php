<?php
    session_start();
    // require_once"config.php";
    require_once"mainclass.php";
    // $connection = new mysqli($host, $db_user, $db_password, $db_name);
    $MainClass = new MainClass();
    $connection = $MainClass -> dbConnect();


    if($connection -> connect_errno == 0) {
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");

        $sql = sprintf (
            "SELECT * FROM users WHERE email='$userEmail' AND password='$userPassword'",
            mysqli_real_escape_string($connection, $userEmail),
            mysqli_real_escape_string($connection, $userPassword)
        );
       
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