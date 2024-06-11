<?php include 'user_header.php'?>
<body>

	<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">	

                    	
	<h1 align="center" style="color: white">police stations</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>si no</th>
				<th>station name</th>
				<th>place</th>
				<th>district</th>
				<th>picode</th>
				<th>phone</th>
				<th>email</th>
				<th>fax no</th>
			</tr>
			<?php
			$q="select * from stations ";
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