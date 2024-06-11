<?php include 'station_header.php';
if (isset($_POST['add'])) 
{
	extract($_POST);
	$dir = "image/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;

	if ($file_type == "jpg" OR $file_type=="JPG" OR $file_type == "png" OR $file_type=="PNG" ) {



		if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
		{

			$dir = "image/";
	$file1 = basename($_FILES['img1']['name']);
	$file_type = strtolower(pathinfo($file1, PATHINFO_EXTENSION));
	$target1 = $dir.uniqid("images_").".".$file_type;

	if ($file_type == "jpg" OR $file_type=="JPG" OR $file_type == "png" OR $file_type=="PNG" ) {



		if(move_uploaded_file($_FILES['img1']['tmp_name'], $target1))
		{
		 $q2="insert into criminals values(null,'$fname','$lname','$gender','$dob','$target','$target1','$idm1','$idm2','$hname','$pname','$place','$district')";
			insert($q2);
			alert("added");
			return redirect ('station_manage_criminals.php');

}                                                               
		else
		{
			echo "file uploading error occured";
		}
	}
	else
	{
		echo "invalid file format, file format =". $file_type;
		echo "error";
	}
}
}

}
if (isset($_GET['del'])) 
{
	extract($_GET);
	$q3="delete from criminals where criminal_id='$del'";
	delete($q3);
}
if (isset($_POST['update'])) 
{
	extract($_POST);
		$dir = "image/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;

	if ($file_type == "jpg" OR $file_type=="JPG" OR $file_type == "png" OR $file_type=="PNG" ) {



		if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
		{

			$dir = "image/";
	$file1 = basename($_FILES['img1']['name']);
	$file_type = strtolower(pathinfo($file1, PATHINFO_EXTENSION));
	$target1 = $dir.uniqid("images_").".".$file_type;

	if ($file_type == "jpg" OR $file_type=="JPG" OR $file_type == "png" OR $file_type=="PNG" ) {



		if(move_uploaded_file($_FILES['img1']['tmp_name'], $target1))
		{
		  $q5="update  criminals set first_name='$fname',last_name='$lname',gender='$gender',dob='$dob',photo='$target',thumb_impression='$target1',identification_mark_1='$idm1',identification_mark_2='$idm2',house_name='$hname',father_name='$pname',place='$place',district='$district' where criminal_id='$upd'";
			update($q5);
			alert("updated");
			return redirect ('station_manage_criminals.php');

}                                                               
		else
		{
			echo "file uploading error occured";
		}
	}
	else
	{
		echo "invalid file format, file format =". $file_type;
		echo "error";
	}
}
}
}


?>
<body>

<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 1500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">


	<?php 
	if (isset($_GET['upd'])) 
	{
	 	extract($_GET);
	  $q4="select * from criminals where criminal_id='$upd'";
	    $ch=select($q4);

	       ?>

	<h1 align="center" style="color: white">manage criminals</h1>
	<form method="post" enctype="multipart/form-data">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>first name</th>
				<td><input type="text" value="<?php echo $ch[0]['first_name'] ?>" name="fname"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" value="<?php echo $ch[0]['last_name'] ?>" name="lname"></td>
			</tr>
			<tr>
				<th>gender</th>
				<td><input type="radio" name="gender" value="male">male<input type="radio" name="gender" value="female">female<input type="radio" name="gender" value="others">others</td>
			</tr>
			<tr>
				<th>date of birth</th>
				<td><input type="date" value="<?php echo $ch[0]['dob'] ?>" name="dob"></td>
			</tr>
			<tr>
				<th>photo</th>
				<td><input type="file"  value="<?php echo $ch[0]['photo'] ?>" name="img"></td>
			</tr>
			<tr>
				<th>thumb impression</th>
				<td><input type="file"  value="<?php echo $ch[0]['thump_impression'] ?>" name="img1"></td>
			</tr>
			<tr>
				<th>identification mark 1</th>
				<td><input type="text"  value="<?php echo $ch[0]['identification_mark_1'] ?>" name="idm1"></td>
			</tr>
			<tr>
				<th>identification mark 2</th>
				<td><input type="text"  value="<?php echo $ch[0]['identification_mark_2'] ?>" name="idm2"></td>
			</tr>
			<tr>
				<th>house name</th>
				<td><input type="text"  value="<?php echo $ch[0]['house_name'] ?>" name="hname"></td>
			</tr>
			<tr>
				<th>father name</th>
				<td><input type="text"  value="<?php echo $ch[0]['father_name'] ?>" name="pname"></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text"  value="<?php echo $ch[0]['place'] ?>" name="place"></td>
			</tr>
			<tr>
				<th>district</th>
				<td><select name="district">
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
				<td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		<?php

} else
{
	?>

	<h1 align="center" style="color: white">manage criminals</h1>
	<form method="post" enctype="multipart/form-data">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>first name</th>
				<td><input type="text" name="fname" class=" form-control"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" name="lname" class=" form-control"></td>
			</tr>
			<tr>
				<th>gender</th>
				<td><input type="radio" name="gender" value="male">male<input type="radio" name="gender" value="female">female<input type="radio" name="gender" value="others">others</td>
			</tr>
			<tr>
				<th>date of birth</th>
				<td><input type="date" name="dob" class=" form-control"></td>
			</tr>
			<tr>
				<th>photo</th>
				<td><input type="file" name="img" class=" form-control"></td>
			</tr>
			<tr>
				<th>thumb impression</th>
				<td><input type="file" name="img1" class=" form-control"></td>
			</tr>
			<tr>
				<th>identification mark 1</th>
				<td><input type="text" name="idm1" class=" form-control"></td>
			</tr>
			<tr>
				<th>identification mark 2</th>
				<td><input type="text" name="idm2" class=" form-control"></td>
			</tr>
			<tr>
				<th>house name</th>
				<td><input type="text" name="hname" class=" form-control"></td>
			</tr>
			<tr>
				<th>father name</th>
				<td><input type="text" name="pname" class=" form-control"></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text" name="place" class=" form-control"></td>
			</tr>
			<tr>
				<th>district</th>
				<td><select name="district" class=" form-control">
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
				<td align="center" colspan="2"><input type="submit" name="add" value="add"></td>
			</tr>
		</table>
		<?php
	}
	?>

		<h1 style="color: white" >view criminals</h1>
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>si no</th>
				<th>criminal name</th>
				<th>gender</th>
				<th>date of birth</th>
				<th>photo</th>
				<th>thumb impression</th>
				<th>identification mark 1</th>
				<th>identification mark 2</th>
				<th>house name</th>
				<th>father name	</th>
				<th>place</th>
				<th>district</th>
			</tr>
			<?php
			$q="select * from criminals";
			$temp=select($q);
			$si=1;
			foreach ($temp as $key) 
			{
				?>
				<tr>
					<td><?php echo $si++ ?></td>
					<td><?php echo $key['first_name'] ?><?php echo $key['last_name']; ?></td>
					<td><?php echo $key['gender']; ?></td>
					<td><?php echo $key['dob'] ;?></td>
					<td><img src="<?php echo $key['photo']; ?>" height="100" width="100" ></td>
					<td><img src="<?php echo $key['thumb_impression']; ?>" height="100" width="100" ></td>
					<td><?php echo $key['identification_mark_1']; ?></td>
					<td><?php echo $key['identification_mark_2']; ?></td>
					<td><?php echo $key['house_name']; ?></td>
					<td><?php echo $key['father_name']; ?></td>
					<td><?php echo $key['place']; ?></td>
					<td><?php echo $key['district'] ;?></td>
					<td><a href="?del=<?php echo $key['criminal_id']; ?>">delete</a></td>
					<td><a href="?upd=<?php echo $key['criminal_id']; ?>">update</a></td>
				</tr>
				<?php
			} 
			?>


		</table>
		
	</form>
</body>


                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>	