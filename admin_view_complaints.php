<?php include 'admin_header.php'?>
<body>
	<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

	<center>
		<h1 style="color: white">view compliants and status</h1>
		<form method="post">
			<table style="width: 500px;color: white" class="table">
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
				 	</tr>
				 	<?php

				 }  ?>

				
			</table>
		</form>
	</center>
</body>



  <!-- <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
           -->


					</div>
  
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>	