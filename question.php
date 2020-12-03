<?php
session_start();

if(isset($_POST['condition']))
{
    $db= mysqli_connect("localhost","root","","userinfo");
    

    $text = $_POST['question'];
    $uid = $_SESSION['userid'];
    if($text!='')
    {
    $sql= "SELECT * FROM profile WHERE usern= '$uid'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result);

    $countq=$row['countq']+1;

    $qid= $uid.$countq;
    $sql = "INSERT INTO ques(usern,qid,q) values('$uid','$qid','$text')";
    mysqli_query($db,$sql);
    $sql2= "UPDATE profile SET countq = $countq WHERE usern = '$uid'";
    mysqli_query($db,$sql2);

    echo "Successfully submitted.";
    }
    else
    {
        echo "Please enter something to POST";
    }
}
?>