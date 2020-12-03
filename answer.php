<?php
session_start();

if(isset($_POST['condition']))
{
    $db= mysqli_connect("localhost","root","","userinfo");
    

    $text = $_POST['answer'];
    // echo "<script>console.log($text)</script>";
    $uid = $_SESSION['userid'];
    $quesid = $_POST['quesid'];
    if($text!='')
    {
    $sql= "SELECT * FROM profile WHERE usern= '$uid'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result);

    $counta=$row['counta']+1;

    $aid= $uid.$counta;
    $sql = "INSERT INTO ans(usern,qid,aid,a) values('$uid','$quesid','$aid','$text')";
    mysqli_query($db,$sql);
    $sql2= "UPDATE profile SET counta = $counta WHERE usern = '$uid'";
    mysqli_query($db,$sql2);

    echo "Successfully submitted.";
    }

    else
    {
        echo "Please enter something to POST";
    }

}
?>