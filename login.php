<?php include 'public_header.php';

if (isset($_POST['login'])) 
{
	extract($_POST);
	$q="select * from login where user_name='$uname' and password='$pass'";
	$temp=select($q);
	if (sizeof($temp)>0) 
		$_SESSION['logid']=$temp[0]['login_id'] ;
 $logid=$_SESSION['logid'];
	{
		if($temp[0]['user_type']=="user")
		{
			$q4="select * from user where login_id='$logid'";
			$te=select($q4);
			if (sizeof($te)>0) 
			{
				$_SESSION['user_id']=$te[0]['user_id'];
				$uid=$_SESSION['user_id'];
			}
			alert("login successfull");
			return redirect ('user_home.php');
		}
		else if ($temp[0]['user_type']=="station") 
		{
			 $q2="select * from stations where login_id='$logid'";
			$se=select($q2);
			if (sizeof($se)>0) 
			{
				$_SESSION['station_id']=$se[0]['station_id'];
				$sid=$_SESSION['station_id'];
				alert("login successfull");
			return redirect ('station_home.php');
			}
			
		}
		else if ($temp[0]['user_type']=="admin") 
		{
			alert("login successfull");
			return redirect ('admin_home.php');
		}
	}
}

?>

<body>

<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">


                    		<h1 style="color: white">login</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>user_name</th>
				<td><input type="text" name="uname" placeholder="user name"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name=" login" value="login"></td>
			</tr>
		</table>
		</form>
                        <!-- <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">kerala police</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Our fighting Is for your justice</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="login.php">login</a>
                        </div>
                    </div>   -->
               
                <!-- <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">We prepared to oppose for you</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                        </div>
                    </div>
                </div>
            </div> -->
 </div>

  <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
          




  
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>