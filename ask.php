<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('Location: entry.php'); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask/Reply freely</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="ask.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light navbg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="home1.php"><img class="img-fluid" alt="Responsive image" src="img/logo3.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="l1 nav-item active" >
                    <a class="nav-link hover" href="home1.php" style="color:white;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white;">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" style="color:white;">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color:white;">Logout</a>
                </li>
            </ul> 
        </div>

    </div>
</nav>
<br>
<?php
    $db= mysqli_connect("localhost","root","","userinfo");
    $sql= "SELECT * FROM ques ORDER BY dandt DESC";
    $result=mysqli_query($db,$sql);
    $result=mysqli_fetch_all($result,MYSQLI_NUM);
    $len=count($result);
    /*echo $len;
   print_r($res);*/

    $row=0;
    while($row<$len)
    {
        echo "<div class='qnbig'>";
        echo "<h10><i>(@" .$result[$row][1]. ") Date : ".$result[$row][3]."</i></h10>";
            echo "<div class='qnmain' id='qmain'>";
                echo "<h5><b>Ques. </b><span id='".$result[$row][0]."' >".$result[$row][2]."</span></h5>";
            echo "</div>";

            echo "<div id='".$result[$row][0].'btn'."'>";
            #echo "<br>";
            echo '<button class="replybtn" onclick="myFunction(this.parentElement.id)">Reply</button>';
            echo "<br><br>";
            echo "</div>";


             

                $sql2= "SELECT * FROM ans WHERE qid='".$result[$row][0]."'";
                $res2=mysqli_query($db,$sql2);
                $res2=mysqli_fetch_all($res2,MYSQLI_NUM);
                $len2=count($res2);
                $row2=0;
                while($row2<$len2)
                {
                echo "<div class='ansmain'>";
                    echo "<h10><i> (@".$res2[$row2][2].") Date : ".$res2[$row2][4]."</h10></i><br>";
                    echo "<p><b>Ans.</b> ".$res2[$row2][3]."</p>";
                echo "</div>";
                $row2++;
                }
            echo "</div>";
            echo "<br>";
            $row++;
    }
/*echo "<h2>Ask here or Reply here</h2>";
echo "<form class=\"example\" action=\"ask.php\">";
  echo "<input type=\"text\" name=\"textq\" placeholder=\"Ask Questions here .....\" name=\"search\">";
  echo "<button type=\"submit\" id=\"sendq\"><i class=\"fa fa-send\"></i></button>";
echo "</form>";*/


 ?>
  <input type="text" id='textid' name="textq" placeholder="Ask Questions here ....." name="search">
   <button type="submit" id="sendq" onclick="sendQuestion()"><i class="fa fa-send"></i></button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
     function myFunction(elem)
            {
            	// var prevhtml = $("#"+elem).html();
            	$("#"+elem).html("<br><input type='text' class='replyinput' id='"+elem+"ans"+"' placeholder='Share your Knowledge here .....' name='search'><button type='submit' id='senda' onclick= 'sendAnswer()'>POST</i></button><br><br>"); 
                // document.getElementById('demo').innerHTML="<input type='text' id='texta' placeholder='Ask Questions here .....' name='search'><button type='submit' id='senda'><i class='fa fa-send'></i></button>";
            }

               // $(document).ready(function(){
                function sendAnswer(){

                    // $('#senda').click(function(){
                    	var quesid = $('#senda').parent().attr('id').replace('btn','');
                        // console.log(quesid);
                        var selector = '#'+quesid+'btnans';
                    $.post("answer.php",
                                {
                                condition: 1,
                                answer: $(selector).val(),
                                quesid : quesid
                                },
            
                        function(data,status){
                        	alert(data);
                            location.reload();
                        });
                    // });
                }
                // });
                // $(document).ready(function(){
                    // $('#sendq').click(function(){
                    function sendQuestion(){    
                        $.post("question.php",
                            {
                                condition: 1,
                                question: $('#textid').val(), 
                            },
                       
                        function(data,status){
                        	alert(data);
                            location.reload();
                        });
                    }
                    // });
                // });
  </script>              
</body>
</html>



