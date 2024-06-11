<?php include 'admin_header.php';
if (isset($_POST['update'])) 
{
	extract($_POST);
	$q5="update feedback set replay='$replay' where feedback_id='$upd'";
	update($q5);
	alert("update successfully");
	return redirect ('admin_view_feedback.php');
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


	<center>
	<?php
	if (isset($_GET['upd'])) 
	{
		extract($_GET);
		$q2="select * from feedback where feedback_id='$upd'";
		$ch=select($q2);
			?>
	 <h1 style="color: white">update replay</h1>
	 <form method="post">
	 	<table align="center" style="width: 500px;color: white" class="table">
	 		<tr>
	 			<th>complaint</th>
	 			<td><input type="text" class=" form-control" readonly="" name="com" value="<?php echo $ch[0]['feedback_desc'] ?>"></td>
	 		</tr>
	 		<tr>
	 			<th>replay</th>
	 			<td><input type="text" class=" form-control" name="replay"></td>
	 		</tr>
	 		<tr>
	 			<td align="center" colspan="2"><input type="submit" name="update" value="send replay"></td>
	 		</tr>
	 	</table>
	 	<?php
	} ?>

		<h1 style="color: white">view feedback</h1>
			 	<table align="center" style="width: 500px;color: white" class="table">
				<tr>
					<th>si no</th>
					<th>user name</th>
					<th>feedback</th>
					<th>replay</th>
					<th>date time</th>
				</tr>
				<?php 
				 $q="select * from feedback inner join user using (user_id)";
				$temp=select($q);
				$si=1;
				foreach ($temp as $key) 
				{
					?>
					<tr>
						<td><?php echo $si++ ?></td>
						<td><?php echo $key['first_name'] ?> <?php echo $key['last_name'] ?></td>
						<td><?php echo $key['feedback_desc'] ?></td>
						<td><?php echo $key['replay'] ?></td>
						<td><?php echo $key['date_time'] ?></td>
						<?php
						if ($key['replay']=='pending') 
						{
							?>
						<td><a href="?upd=<?php echo $key['feedback_id'] ?>">send replay</a></td>
						<?php
					} ?>
					</tr>
					<?php
				} ?>
			</table>
		</form>
	</center>
</body>
</div>
  
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>	