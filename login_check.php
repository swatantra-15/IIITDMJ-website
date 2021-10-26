<?php
if ($_POST['submit'] == "Sign in") {
    //Collect POST values
    $login = $_POST['username'];
    $password = $_POST['password'];
    if ($login && $password) {
        
        //Connect to mysql server
        $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
        //Check link to the mysql server
        if (!$link) {
            die("<p> <font color=white font face='courier' size='6pt'><center>Failed to connect to server:<center></font> </p> ");
        }
        //Create query (if you have a Logins table the you can select login id and password from there)
        // $qry='SELECT * FROM logins WHERE login_id = $login AND login_password = $password';
        // //Execute query
        // $result=mysqli_query($link, $qry);
        // $count = mysql_num_rows($result);
        if (($login=='admin@gmail.com' && $password=='admin')||($login=='xyz' && $password=='xyz123')) {
            $count=1;
        }
        //if query was successful it should fetch 1 matching record from the table.
        if ($count==1) {
            //Login successful set session variables and redirect to main page.
            session_start();
            $_SESSION['IS_AUTHENTICATED'] = 1;
            $_SESSION['USER_ID'] = $login;
            header('location:admin/admin.php');
        } else {
            //Login failed
            include('login.html');
            echo "<p> <font color=white font face='courier' size='6pt'><center>Incorrect Username or Password !!!<center></font> </p>";
            
            exit();
        }
    } else {
        include('login.html');
        echo "<p> <font color=white font face='courier' size='6pt'><center>Username or Password missing!!<center></font> </p>";
        exit();
    }
} else {
    header("location: login.html");
    exit();
}
