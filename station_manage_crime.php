<?php include 'station_header.php';
extract($_GET);
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

	$q="insert into crimes values(null,'$ctype','$ctitle','$cdesc','$ctime','$rtime','$sid','$cstatus','$place','$district','$target')";
 insert($q);
	alert("added");
	return redirect("station_manage_crime.php");

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
if (isset($_GET['del'])) 
{
	extract($_GET);
	$q2="delete from crimes where crime_id='$del'";
	delete($q2);

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

	 echo $q4="update  crimes set crime_title='$ctitle',crime_description='$cdesc',date_time_occured='$ctime',date_time_reported='$rtime',crime_status='$cstatus',place='$place',district='$district',image='$target' where crime_id='$upd'";
	update($q4);

	alert("added");
	return redirect("station_manage_crime.php");

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
		$q3="select * from crimes where crime_id='$upd'";
		$ch=select($q3);
		?>


		<h1 align="center" style="color: white">manage crimes</h1>
	<center>
			<form method="post"  enctype="multipart/form-data">

				<table align="center" style="width: 500px;color: white" class="table">
					<tr>
						<th>crime type</th>
						<td><select name="ctype" class=" form-control"  >
							<option>select</option>
							<?php 

							$q="select * from crime_type";
							$sto=select($q);
							foreach ($sto as $key) 
							{
								?>
								<option value="<?php echo $key['crime_type_id'] ?>"><?php echo $key['crime_type_name'] ?></option>
								<?php
							} ?>

						</select></td>
					</tr>
				
					<tr>
						<th>crime title</th>
						<td><input type="text" class=" form-control" value="<?php echo $ch[0]['crime_title'] ?>" name="ctitle"></td>
					</tr>
					<tr>
						<th>crime decription</th>
						<td><input type="text" class=" form-control"  value="<?php echo $ch[0]['crime_description'] ?>" name="cdesc"></td>
					</tr>
					<tr>
						<th>crime time </th>
						<td><input type="datetime-local" class=" form-control"  value="<?php echo $ch[0]['date_time_occured'] ?>" name="ctime"></td>
					</tr>
					<tr>
						<th>reported time</th>
						<td><input type="datetime-local" class=" form-control"  value="<?php echo $ch[0]['date_time_reported'] ?>" name="rtime"></td>
					</tr>
					<tr>
						<th>crime status</th>
						<td><input type="text"  class=" form-control" value="<?php echo $ch[0]['crime_status'] ?>" name="cstatus"></td>
					</tr>
					<tr>
						<th>place</th>
						<td><input type="text" class=" form-control" value="<?php echo $ch[0]['place'] ?>" name="place"></td>
					</tr>
					<tr>
						<th>district</th>
						<td><select name="district" class=" form-control"  value="<?php echo $ch[0]['district'] ?>">
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
						<th>image</th>
						<td><input type="file"  class=" form-control" value="<?php echo $ch[0]['image'] ?>" name="img"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
					</tr>
					<?php 
	}
	   else
	   { 
	   	?>
		
	
	<h1 align="center" style="color: white">manage crimes</h1>
	<center>
			<form method="post"  enctype="multipart/form-data">

				<table align="center" style="width: 500px;color: white" class="table">
					<tr>
						<th>crime type</th>
						<td><select name="ctype"  class=" form-control"  >
							<option>select</option>
							<?php 

							$q="select * from crime_type";
							$sto=select($q);
							foreach ($sto as $key) 
							{
								?>
								<option value="<?php echo $key['crime_type_id'] ?>"><?php echo $key['crime_type_name'] ?></option>
								<?php
							} ?>

						</select></td>
					</tr>
				
					<tr>
						<th>crime title</th>
						<td><input type="text" class=" form-control" name="ctitle"></td>
					</tr>
					<tr>
						<th>crime decription</th>
						<td><input type="text"class=" form-control" name="cdesc"></td>
					</tr>
					<tr>
						<th>crime time </th>
						<td><input type="datetime-local" class=" form-control" name="ctime"></td>
					</tr>
					<tr>
						<th>reported time</th>
						<td><input type="datetime-local" class=" form-control" name="rtime"></td>
					</tr>
					<tr>
						<th>crime status</th>
						<td><input type="text" class=" form-control" name="cstatus"></td>
					</tr>
					<tr>
						<th>place</th>
						<td><input type="text" class=" form-control" name="place"></td>
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
						<th>image</th>
						<td><input type="file" class=" form-control" name="img"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="add" value="add"></td>
					</tr>
			
				</table>
				<?php
			}
			  ?>
				<h1 style="color: white">view crimes</h1>
				<table align="center" style="width: 500px;color: white" class="table">					
					<tr>
						<th>si no</th>
						<th>crime title</th>
						<th>crime description</th>
						<th>crime time</th>
						<th>time reported</th>
						<th>crime status</th>
						<th>place</th>
						<th>district</th>
						<th>image</th>
					</tr>
					<?php
					$q2="select * from crimes";
					$temp=select($q2);
					$si=1;
					foreach ($temp as $key) 
					{
						?>
						<tr>
							<td><?php echo $si++ ?></td>
							<td><?php echo $key['crime_title'] ?></td>
							<td><?php echo $key['crime_description'] ?></td>
							<td><?php echo $key['date_time_occured'] ?></td>
							<td><?php echo $key['date_time_reported']?></td>
							<td><?php echo $key['crime_status'] ?></td>
							<td><?php echo $key['place'] ?></td>
							<td><?php echo $key['district'] ?></td>
							<td><img src="<?php echo $key['image'] ?>" height="100" width="100" ></td>
						    <td><a href="?del=<?php echo $key['crime_id'] ?>">delete</a></td>
						    <td><a href="?upd=<?php echo $key['crime_id'] ?>">update</a></td>
						</tr>
						<?php  
					}
					    ?>

				</table>
			</form>
	</center>
</body>

                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>	