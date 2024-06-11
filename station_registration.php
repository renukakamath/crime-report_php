<?php include 'public_header.php';
if (isset($_POST['signup'])) 
{
	extract ($_POST);
	$q="insert into login values(null,'$uname','$pass','station')";
	$ids=insert($q);
	$q2="insert into stations values(null,'$ids','$sname','$place','$district','$pin','$phone','$email','$fax')";
	insert($q2);
	alert("registration successfull");
	return redirect ('login.php');
}

?>
   <style type="text/css">
    	#tb{
    		width: 500px;color: white; 
    	} 
    </style>
<body>
<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 150vh; min-height: 600px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">


	<h1 align="center" style="color: white">STATION REGISTRATION</h1>
	<form method="post">
		<table align="center" class="table" id="tb">
			<tr>
				<th>station name</th>
				<td><input type="text" pattern="[A-Za-z]{20}" required="" class=" form-control" name="sname" placeholder="enter first name" ></td>
			</tr>
			
				<th>place</th>
				<td><input type="text" pattern="[A-Za-z]{20}" class=" form-control" name="place"  placeholder="enter the place"></td>
			</tr>
			<tr>
				<th>district</th>
				<td><select name="district" class=" form-control" required="">
					<option>select</option>
					<option>alappuzha</option>
					<option>eranakulam</option>
					<option>kollam</option>
					<option>kozhikod</option>
					<option>patthanamthitta</option>
					<option>kottayam</option>
					<option>malappuram</option>
					<option>tvm</option>
				</select></td>
			</tr>
			<tr>
				<th>pincide</th>
				<td><input type="text" pattern="[0-9]{6}" class=" form-control" name="pin"   placeholder="enter the pin"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text" pattern="[0-9]{10}"  class=" form-control" name="phone" placeholder="enter  phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" class=" form-control" name="email"  placeholder="enter the email"></td>
			</tr>
			<tr>
				<th>fax no</th>
				<td><input type="text"  pattern="[0-9]{10}" class=" form-control" name="fax"></td>
			</tr>
			<tr>
				<th>user name</th>
				<td><input type="text" required="" class=" form-control" name="uname"  placeholder="create a user name"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" required="" pattern="[A-Za-z0-9]{>6}" class=" form-control" name="pass" placeholder="create a password"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit"  name="signup" value="signup"></td>

			</tr> 
		</table>
	</form>
 </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>