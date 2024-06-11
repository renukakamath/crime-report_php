<?php include 'station_header.php';
if (isset($_POST['update'])) 
{
	extract($_POST);
	$q3="update complaints set status='$status' where complaint_id='$upd'";
	update($q3);
	alert("update successfully");
	return redirect ('station_view_complaints.php');


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
		$q2="select * from complaints where complaint_id='$upd'";
		$ch=select($q2);
		?>
		<body>
			<h1 align="center" style="color: white">upadte status</h1>
			<form method=post>
				<table align="center" style="width: 500px;color: white" class="table ">
					<tr>
						<th>complaint</th>
						<td><input type="text" class=" form-control" readonly="" value="<?php echo $ch[0]['description'] ?>" name="comlapint"></td>
					</tr>
					<tr>
						<th>status</th>
						<td><input type="text" class=" form-control" name="status" value="<?php echo $ch[0]['status'] ?>"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
					</tr>

					
				</table>
				<?php
			}  ?>
				
		
	<h1 align="center" style="color: white">view complaints</h1>
</body>
<form method="post" enctype="multipart/form-data">
	<table align="center" style="width: 500px;color: white" class="table ">
		<tr><th>si no</th>
			<th>user name</th>
			<th>station name</th>
			<th>complaint discription</th>
			<th>date time reported</th>
			<th>evidence if any</th>
			<th>status</th>
		</tr>
		<?php
		$q="SELECT * FROM complaints INNER JOIN USER USING(user_id) INNER JOIN stations USING (station_id) INNER JOIN evidence USING (user_id)";
		$temp=select($q);
		$si=1;
		foreach ($temp as $key) 

		{
			?>
			<tr>
				<td><?php echo $si++ ?></td>
				<td><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></td>
				<td><?php echo $key['station_name'] ?></td>
				<td><?php echo $key['description'] ?></td>
				<td><?php echo $key['date_time'] ?></td>
				<td><?php echo $key['evidence'] ?></td>
				<td><?php echo $key['status'] ?></td>
				<?php  
				if ($key['status']=="pending") 
				{
					?>
					<td><a href="?upd=<?php echo $key['complaint_id'] ?>">update status</a></td>
					<?php

				} else
				{

				    ?>
				    <td><a href="station_sened_message.php?msg=<?php echo $key['user_id'] ?>">send meassage</a></td>
				    <?php
				}
				?>
			
			</tr>
			<?php
		}   ?>
	</table>
	
</form>
</div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>