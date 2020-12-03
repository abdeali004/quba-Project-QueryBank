<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:entry.php');
}
else{ 


  $userid=$_SESSION['userid'];

  if(isset($_POST['confirm']))
  {

    $image=$_FILES['file']['name'];
    $temp_image=$_FILES['file']['tmp_name'];

    $target="user_img/".basename($image);

    $db= mysqli_connect("localhost","root","","userinfo");

    $s="SELECT * FROM profile where usern ='$userid'";
    $result=mysqli_query($db,$s);
    $num=mysqli_num_rows($result);
    if($num)
    {
    $sql= "UPDATE profile SET image = '$image' where usern ='$userid'";

    mysqli_query($db,$sql);
  
    move_uploaded_file($temp_image, $target);

    }
    else
    {

      $sql= "UPDATE profile SET image = '$image' where usern ='$userid'";
    	mysqli_query($db,$sql);
  
    move_uploaded_file($temp_image, $target);
    }
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complete Bootstrap 4 Website Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="profile_style.css" rel="stylesheet">
</head>
<body>

<div class="container">
     <div class="row">
        
         <?php
         $username=strtoupper($_SESSION['username']);
         $userid=$_SESSION['userid'];
        $db=mysqli_connect("localhost","root","","userinfo");
        $sql= "SELECT * FROM profile WHERE usern= '$userid'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($result);
            
             echo "<div class='col-sm-3 col-md-6 col-lg-4' >";
            
            echo "<a class='navbar-brand' href='home1.php'><img class='img-fluid' alt='Responsive image' src='img/logo3.png'></a>";

            echo "</div>";
       
            echo "<div class='col-sm-3 col-md-6 col-lg-4' >";
            #echo "<img id='default_img' src='user_img/".$row['image']."' class='img-fluid' style='width:200px;height:200px'>";
           # echo "<br><br><br><br><br><br><br><br><br>";
              

                echo '<div style="width: 200px;box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2), 0 6px 20px 0 rgba(255, 255, 255, 0.19);text-align: center;">';
                  echo "<img alt='No Image' src='user_img/".$row['image']."' class='img-fluid' style='width: 200px;height: 200px;'>";
                    
                echo'</div>';
                echo "<br>";
                echo "<h4 class='m-t-2'> ".$username." </h4>";
                echo "<h5 class='m-t-2'>@".$_SESSION['userid']."</h5>";
                    echo "<br>";
               echo "<span class='tag tag-primary'><i class='fa fa-user'></i>".$row['countq']." Questions  ||</span>";
                echo "<span class='tag tag-success'><i class='fa fa-user'></i>    ".$row['counta']." Answers</span>";
               
                 ?>

        </div>
        
        <div class="col-sm-3 col-md-6 col-lg-4" >
            <br>
            <br>
            <h4 class="m-t-2">Upload a different photo</h4>
            <label for="img">
                <span class="custom-file-control">Select Image :</span>
            </label>
            <form method="post" action="profile.php" enctype="multipart/form-data">
            <input type="file" name="file" accept="img/*" >
            <br>
            <br>
            <button type="submit" name="confirm" id="submit_key">Confirm</button>
            <br>
            </form>
             
        </div>
  
       
    </div>
        
        <hr class="light-100">
    <div class="row m-y-2">
        <div class="col-lg-8 push-lg-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
            </ul>
            <div class="tab-content p-b-3">
                <br>
                <div class="tab-pane active" id="profile">
                    <br>
                    <h4 class="m-y-2">User Profile</h4>
                    <div class="row">
                        <br>
                        <div class="col-md-12">
                            <br>
                            <h6>About</h6>
                            <p>
                                Tell about yourself something......
                            </p>
                            <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div>
                        <br>
                        
                        <br>
                        <div class="col-md-12">
                            <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                    <br>
                </div>
                <div class="tab-pane" id="messages">
                    <h4 class="m-y-2">Recent Messages &amp; Notifications</h4>
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong style="color: red;">.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <h4 class="m-y-2">Edit Profile</h4>
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Mary">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Jane">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="email@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">About</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Tell about yourself something......">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Hobbies</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="Indie music, skiing and hiking.....etc.">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Street" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="City & State" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="PinCode" placeholder="PinCode">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="janeuser">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div>
<hr>
</body>