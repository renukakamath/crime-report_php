<?php include 'user_header.php';
if (isset($_POST['send'])) 
{
	extract($_POST);
	$q2="insert into feedback values(null,'$uid','$fb','pending',now())";
	insert($q2);
	
}

?>

<body>

	<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 1000px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">	

	<h1 align="center" style="color: white">send feedback</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>feedback</th>
				<td> <input type="text" class=" form-control" name="fb"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="send" value="send"></td>
			</tr>
		</table>
		<h1 align="center" style="color: white">view feedback</h1>
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>si no</th>
				<th>user name</th>
				<th>feedback</th>
				<th>replay</th>
				<th>date time</th>
			</tr>
			<?php
			$q="SELECT * FROM feedback INNER JOIN USER USING(user_id)";
			$temp=select($q);
			$si=1;
			foreach ($temp as $key) 
			{
				?>
				<tr>
					<td><?php echo $si++ ?></td>
					<td><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></td>
					<td><?php echo $key['feedback_desc'] ?></td>
					<td><?php echo $key['replay'] ?></td>
					<td><?php echo $key['date_time'] ?></td>
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