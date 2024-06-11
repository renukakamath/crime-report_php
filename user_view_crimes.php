<?php include 'user_header.php'?>
<body>
		<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">	

                    	
<h1 style="color: white">view crimes</h1>
<form method="post">
				<table style="width: 500px;color: white" class="table">
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