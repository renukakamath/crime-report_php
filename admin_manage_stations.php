<?php include 'admin_header.php';
if (isset($_GET['del'])) 
{
	extract($_GET);
	$q3="delete from stations where station_id='$del'";
	delete($q3);
}
if (isset($_POST['update'])) 
{
	extract($_POST);
	$q5="update stations set station_name='$sname',place='$place',district='$district',pincode='$pin',phone='$phone',email='$email',fax_no='$fax' where station_id='$upd'";
	update($q5);
	alert("update successfull");
	return redirect ('admin_manage_stations.php');

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

	<?php
	if (isset($_GET['upd'])) 
	{
		extract($_GET);
		$q4="select * from stations where station_id='$upd'";
	$ch=select($q4);
	?>
	
	<h1 align="center" style="color: white">update station</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>station name</th>
				<td><input type="text" name="sname" class=" form-control" value="<?php echo $ch[0]['station_name'] ?>"  ></td>
			</tr>
			
				<th>place</th>
				<td><input type="text" name="place" class=" form-control" value="<?php echo $ch[0]['place'] ?>" ></td>
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
				<th>pincide</th>
				<td><input type="text" class=" form-control" name="pin" value="<?php echo $ch[0]['pincode'] ?>"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text" class=" form-control" name="phone" value="<?php echo $ch[0]['phone'] ?>"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="text" class=" form-control" name="email" value="<?php echo $ch[0]['email'] ?>"></td>
			</tr>
			<tr>
				<th>fax no</th>
				<td><input type="text" class=" form-control" name="fax" value="<?php echo $ch[0]['fax_no'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		<?php  	
	} ?>


	<h1 align="center" style="color: white">manage police stations</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>si no</th>
				<th>station name</th>
				<th>place</th>
				<th>district</th>
				<th>pincode</th>
				<th>phone</th>
				<th>email</th>
				<th>fax</th>
			</tr>
			<?php 
			$q="select * from stations";
			$temp=select($q);
			$si=1;
			foreach ($temp as $key) 
			{
				?>
				<tr>
				<td><?php echo $si++ ?></td>
				<td><?php echo $key['station_name'] ?></td>
				<td><?php echo $key['place'] ?></td>
				<td><?php echo $key['district'] ?></td>
				<td><?php echo $key['pincode'] ?></td>
				<td><?php echo $key['phone'] ?></td>
				<td><?php echo $key['email'] ?></td>
				<td><?php echo $key['fax_no'] ?></td>
				<td><a href="?del=<?php echo $key['station_id'] ?>">delete</a></td>
				<td><a href="?upd=<?php echo $key['station_id'] ?>">update</a></td>
				</tr>

				<?php  
			}  ?>
			 
		</table>
	</form>



 <!--  <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span> -->
          


                    	</div>

  
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>	