<?php  include 'station_header.php' ?>
<body>
<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">


	<h1 align="center"  style="color: white">view found report</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>si no</th>
				<th>user name</th>
				<th>criminal name</th>
				<th>founded place</th>
				<th>date time</th>
				<th>description</th>
			</tr>
			<?php
			$q="SELECT *,CONCAT(`user`.`first_name`,' ',`user`.`last_name`) AS uname,CONCAT(`criminals`.`first_name`,' ',`criminals`.`last_name`) AS cname FROM found_report INNER JOIN USER USING(user_id) INNER JOIN criminals USING (criminal_id)";
			$ch=select($q);
			$si=1;
			foreach ($ch as $key) 
			{
				?>
				<tr>
					<td><?php echo $si++ ?></td>
					<td><?php echo $key['uname'] ?></td>
					<td><?php echo $key['cname'] ?></td>
					<td><?php echo $key['found_place'] ?></td>
					<td><?php echo $key['date_time'] ?></td>
					<td><?php echo $key['description'] ?></td>
				</tr>
				<?php
			}   ?>

		</table>
	</form>
</body>
			</div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>