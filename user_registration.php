<?php include 'public_header.php';
if (isset($_POST['signup'])) 
{
	extract ($_POST);
	$q="insert into login values(null,'$uname','$pass','user')";
	$ids=insert($q);
	$q2="insert into user values(null,$ids,'$fname','$lname','$hname','$place','$pin','$phone','$email')";
	insert($q2);
	alert("registration successfull");
	return redirect ('login.php');

}
?>
<body>
	
	<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 150vh; min-height: 600px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">	


	<h1 align="center" style="color: white">USER REGISTRATION</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>First name</th>
				<td><input type="text" required="" class=" form-control" name="fname" placeholder="enter first name" ></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" required="" class=" form-control" name="lname" placeholder="enter last name"></td>
			</tr>
			
			<tr>
				<th>house name</th>
				<td><input type="text" required="" class=" form-control" name="hname" placeholder="enter your house name" ></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text" required="" class=" form-control" name="place"  placeholder="enter the place"></td>
			</tr>
			<tr>
				<th>pincide</th>
				<td><input type="text" required="" pattern="[0-9]{6}" class=" form-control" name="pin"   placeholder="enter the pin"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text" required="" pattern="[0-9]{10}" class=" form-control" name="phone" placeholder="enter  phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" class=" form-control" name="email"  placeholder="enter the email"></td>
			</tr>
			<tr>
				<th>user name</th>
				<td><input type="text" required="" class=" form-control" name="uname"  placeholder="create a user name"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" class=" form-control" required="" pattern="[A-Za-z0-9]{>6}"  name="pass" placeholder="create a password"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="signup" value="signup"></td>
			</tr> 
		</table>
	</form>
</body>
			</div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>