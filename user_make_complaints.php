<?php include 'user_header.php';
if (isset($_POST['submit'])) 
{
	extract($_POST);
	echo $q2="insert into complaints values(null,'$uid','$sname','$desc','$dnt','pending')";
	insert($q2);
	alert("complaint added successfully");
	
}
?>
<body>
	<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">	

	<h1 style="color: white">report criminal found</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>crime type</th>
					<td><select name="sname" class=" form-control"   >
						<option>select</option>
						<?php 

						$q="select * from stations";
						$sto=select($q);
						foreach ($sto as $key) 
						{
							?>
							<option value="<?php echo $key['station_id'] ?>"><?php echo $key['station_name'] ?></option>
								<?php
							} ?>

						</select></td>
					</tr>
					<tr>
						<th>description</th>
						<td><input type="text" class=" form-control" name="desc"></td>
					</tr>
					<tr>
						<th>date and time</th>
						<td><input type="datetime-local" class=" form-control" name="dnt"></td>
					</tr>
				
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
					</tr>
		</table>
		<h1 style="color: cyan">view compliants and status</h1>
		<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
				<tr>
					<th>si no</th>
					<th>user name</th>
					<th>station name</th>
					<th>complaint description</th>
					<th>date time</th>
					<th>status</th>
				</tr>
				<?php
				$q="SELECT * FROM complaints INNER JOIN USER USING (user_id) INNER JOIN stations USING (station_id)";
				 $temp=select($q);
				 $si=1;
				 foreach ($temp as $key) 
				 {
				 	?>
				 	<tr>
				 		<td><?php echo $si++?></td>
				 		<td><?php echo $key['first_name']?> <?php echo $key['last_name'] ?></td>
				 		<td><?php echo $key['station_name'] ?></td>
				 		<td><?php echo $key['description'] ?></td>
				 		<td><?php echo $key['date_time'] ?></td>
				 		<td><?php echo $key['status'] ?></td>
				 		<td><a href="user_upload_evidence.php?upd=<?php echo $key['station_id'] ?>"> uploade evidence</a></td>

				 	</tr>
				 	<?php

				 }  ?>



		</table>



	</form>
</body>
			</div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>